<?php

namespace App\Helpers\Senders;

use App\Helpers\Senders\Abstracts\SendTelegram;
use App\Helpers\Senders\Interface\SendFormInterface;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;

class Bitrix24 extends SendTelegram implements SendFormInterface
{
    private static Request $request;
    protected static Client $guzzle;
    private static string $phone;
    /**
     * direction deals in bitrix
     * @var string|int
     */
    private static int|string $direction;
    /**
     * deal ID for this $phone in current $direction
     * @var string|int
     */
    private static int|string $dealId;
    /**
     * link on last closed deal for this $phone in current $direction
     * @var string
     */
    private static ?string $link;
    private static ?string $dealStageName;
    /**
     * @var array[]
     */
    private static array $data;
    private static int|string $contactId;
    private static int|string|null $totalDeals;
    private static ?string $comment;
    private static string $subdomainBitrix;
    private static ?string $houseSquareValueForBitrixDealInput;
    public function __construct(string $subdomain_bitrix, string $base_uri, ?int $direction){
        parent::__construct();
        self::$guzzle = new Client(
            config:[
                'base_uri'  => $base_uri,
                'timeout'   => 4,
            ]
        );
        self::$direction = $direction ?? 46; //46 is default value
        self::$subdomainBitrix = $subdomain_bitrix;
        self::$houseSquareValueForBitrixDealInput = null;
    }

    /**
     * @param array $data
     * @param Request $request
     * @return bool|string
     * @throws GuzzleException
     */
    public function sendForm(array $data, Request $request): bool|string
    {
        self::$request = $request;
        try {
            self::$data = self::normalizeData($data);
            if (empty(self::$comment)){
                self::setDefaultComment();
            }
            self::$contactId = self::getContact();
            $lastId = self::getLastDeal();
            if (is_null($lastId)){
                self::$dealId = self::addDealCrm();
            }
            if (is_int($lastId)){
                $needTask = self::needTask($lastId);
                !$needTask ? self::$dealId = self::addDealCrm() : self::$dealId = $lastId;
            }
            if (empty(self::$dealId)){
                self::sendTelegram(__('Не получилось отправить лид: referer = ') . $request->server('HTTP_REFERER') . __(' с сообщением: ') . self::$comment, null);
                throw new Exception(__('Не удалось отправить форму - нет ответа от битрикс с созданным ID'));
            }
            self::addComment();
            if ($needTask ?? false){
                self::addTask();
            }

            return true;
        }catch (Exception $error){
            self::sendTelegram($error->getMessage(), null);
            return false;
        }catch (GuzzleException $e) {
            \Log::error('Guzzle ended with Error: '. $e->getMessage());
            return false;
        }
    }

    /**
     * @return bool
     * @throws GuzzleException
     */
    private static function addTask(): bool
    {
        $method = 'crm.activity.add.json';
        $data = [
            'fields' => [
                'OWNER_TYPE_ID'     => 2,
                'OWNER_ID'          => self::$dealId,
                'TYPE_ID'           => 2,
                'COMMUNICATIONS'    => [
                    [
                        'VALUE'         => self::$phone,
                        'ENTITY_ID'     => self::$contactId,
                        'ENTITY_TYPE_ID'=> 3,
                    ]
                ],
                'SUBJECT'           => __('Клиент оставил новую заявку, свяжись с ним'),
                'START_TIME'        => date("Y-m-d H:i:s"),
                'DESCRIPTION'       => __('Важный звонок'),
                'DESCRIPTION_TYPE'  => 3,
                'EMAIL'             => [
                    [
                        'VALUE'     => self::$data['email'] ?? '',
                        'VALUE_TYPE'=> 'HOME',
                    ]
                ],
            ],
        ];
        $response = self::post($method, $data);
        if (empty($response['result'])){
            return false;
        }
        return true;
    }

    /**
     * @return bool
     * @throws GuzzleException
     */
    private static function addComment(): bool
    {
        $method = 'crm.livefeedmessage.add.json';
        if (empty(self::$comment)){
            self::setDefaultComment();
        }
        if (!empty(self::$link)){
            self::$comment .= "\n\nУ клиента уже была сделка, но она была закрыта по причне: " . self::$dealStageName . "!\nСсылка на предыдущую сделку:\n" . self::$link . "\nВсего сделок в этой воронке у клиента: " . self::$totalDeals;
        }
        $data = [
            'fields' => [
                'POST_TITLE'    => __('Комментарий к сделке'),
                'MESSAGE'       => self::$comment,
                'ENTITYTYPEID'  => 2,
                'ENTITYID'      => self::$dealId,
            ],
        ];
        $response = self::post(method:$method,data:$data);
        if (!empty($response['result'])){
            return true;
        }
        return false;
    }
    private static function setDefaultComment():void
    {
        $url = parse_url(self::$request->server('HTTP_REFERER'));
        $url = ($url['host'] ?? '') . ($url['path'] ?? '');
        self::$comment = 'Заявка с сайта ' . $url . ' ';
        !empty(self::$data['subject']) ? self::$comment .= self::$data['subject'] : '';
        self::$comment .= "\nУникальный идентификатор посетителя - " . self::$request->server('HTTP_X_REAL_IP');
        !empty(self::$data['city']) ? self::$comment .= "\nГород доставки: " . self::$data['city'] : '';
        !empty(self::$data['name']) ? self::$comment .= "\nИмя: " . self::$data['name'] : '';
        self::$comment .= "\nТелефон: " . self::$phone;
        !empty(self::$data['email']) ? self::$comment .= "\nEmail: " . self::$data['email'] : '';
        !empty(self::$data['connect']) ? self::$comment .= "\nСпособ связи: " . self::$data['connect'] : '';
        !empty(self::$data['question']) ? self::$comment .= "\nВопрос: " . self::$data['question'] : '';
        self::$comment .= "\nURL с которого была отправлена форма: " . self::$request->server('HTTP_REFERER') . "\n";
        !empty(self::$data['house_type']) ? self::$comment .= "\nТип дома: " . self::$data['house_type'] : '';
        !empty(self::$data['house_square']) ? self::$comment .= "\nРазмер дома: " . self::$data['house_square'] : '';
        !empty(self::$data['house-date']) ? self::$comment .= "\nСрок строительства: " . self::$data['house-date'] : '';
        !empty(self::$data['house-place']) ? self::$comment .= "\nНаличие участка: " . self::$data['house-place'] : '';
        !empty(self::$data['house-credit']) ? self::$comment .= "\nАктуальность ипотеки: " . self::$data['house-credit'] : '';
    }
    /**
     * @param int $id
     * @return bool
     * @throws GuzzleException
     */
    private static function needTask(int $id):bool
    {
        $method = 'crm.deal.get.json';
        $data = [
            'id' => $id,
        ];
        $dealInfo = self::post($method, $data);
        $stage = explode(':', $dealInfo['result']['STAGE_ID'])[1];
        if (self::isClosedStage($stage)){
            self::$link = 'https://'.self::$subdomainBitrix.".bitrix24.ru/crm/deal/details/{$dealInfo['result']['ID']}/";
            if ($stage !== 'WON'){
                self::$dealStageName = __('Сделка провалена');
            }
            if ($stage === 'WON'){
                self::$dealStageName = __('Сделка успешна');
            }
            self::$dealId = $dealInfo['result']['ID'];
        }
        if (!self::isClosedStage($stage))
        {
            return true;
        }
        return false;
    }

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    private static function addDealCrm():int
    {
        $method = 'crm.deal.add.json';
        $namelead = [];
        if (!empty(self::$data['city'])){
            $namelead[] = self::$data['city'];
        }
        $namelead[] = self::$phone;
        if (!empty(self::$data['subject'])){
            $namelead[] = self::$data['subject'];
        }
        $parsed_referer = parse_url(self::$request->server('HTTP_REFERER'));
        $referer = $parsed_referer['host'] . $parsed_referer['path'];
        $data = [
            'fields' => [
                'TITLE' => implode(',', $namelead),
                'CONTACT_ID' => self::$contactId,
                'OPENED' => 'Y',
                'CREATED_BY_ID' => 1,
                'UTM_CAMPAIGN' => self::$request->session()->get('utm')['utm_campaign'] ?? '',
                'UTM_CONTENT' => self::$request->session()->get('utm')['utm_content'] ?? '',
                'UTM_MEDIUM' => self::$request->session()->get('utm')['utm_medium'] ?? '',
                'UTM_SOURCE' => self::$request->session()->get('utm')['utm_source'] ?? '',
                'UTM_TERM' => self::$request->session()->get('utm')['utm_term'] ?? '',
                'CURRENCY_ID' => __('RUB'),
                'CATEGORY_ID' => self::$direction,
                'UF_CRM_1651563289996' => self::$data['city'],
                'UF_CRM_1681873184' => $referer,
                'UF_CRM_1663672202747' => self::$houseSquareValueForBitrixDealInput,
            ],
            'params' => ['REGISTER_SONET_EVENT' => 'Y'],
        ];
        $response = self::post(method:$method,data:$data);
        if (empty($response['result'])){
            throw new Exception('error add Deal! (empty result).');
        }
        return $response['result'];
    }

    /**
     * @return int|null
     * @throws GuzzleException
     */
    private static function getLastDeal(): int|null
    {
        $method = 'crm.deal.list.json';
        $data = [
            'order'  => ['ID'=>'ASC'],
            'filter' => [
                'CONTACT_ID' => self::$contactId,
                'CATEGORY_ID'=> self::$direction,
            ],
            'select' => ['ID'],
        ];
        $response = self::post(method:$method,data:$data);
        if (!empty($response['result'])){
            $data['start'] = (int)$response['total'] - 1;
            $response = self::post(method:$method,data:$data);
            $last = count($response['result']) - 1;
            return $response['result'][$last]['ID'];
        }
        return null;
    }

    /**
     * @return int
     * @throws GuzzleException
     */
    private static function getContact(): int
    {
        $method = 'crm.contact.list.json';
        $data = [
            'order' => ['DATE_CREATE' => 'ASC'],
            'filter' => ['PHONE' => self::$phone],
            'select' => ['ID'],
        ];
        $result = self::post(method:$method, data:$data);
        if (!isset($result['result'][0]['ID'])){
            $data['filter']['PHONE'] = self::replaceSymbolsPhone(self::$phone);
            $result = self::post(method: $method, data: $data);
        }
        if (!empty($result['total'])){
            self::$totalDeals = (int)$result['total'];
        }
        if (isset($result['result'][0]['ID'])){
            return (int)$result['result'][0]['ID'];
        }else{
            return self::addContactCrm();
        }
    }

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    private static function addContactCrm():int
    {
        $method = 'crm.contact.add.json';
        $data = [
            'fields' => [
                'NAME'          => self::$data['name'] ?? '',
                'ADDRESS_CITY'  => self::$data['city'] ?? '',
                'PHONE'         => [[
                    'VALUE'         => self::$phone,
                    'VALUE_TYPE'    => 'HOME',
                ]],
                'CREATED_BY_ID' => 1,
                'EMAIL'         => [[
                    'VALUE'         => (self::$data['email'] ?? ''),
                    'VALUE_TYPE'    => 'HOME',
                ]],
            ],
            'params' => ['REGISTER_SONET_EVENT' => 'Y']
        ];
        $response = self::post(method: $method, data: $data);
        if (empty($response['result'])){
            throw new Exception('error create contact in CRM. error: ' . ($response['error'] ?? 'empty result.'));
        }
        return (int)$response['result'];
    }
    private static function replaceSymbolsPhone(string $phone):string
    {
        $phone = str_replace(array('(',' ','-',')','+'),'',$phone);
        $phone[0] === '8' ? $phone[0] = '7' : null;

        return '+'.$phone;
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    private static function normalizeData(array $data): array
    {
        $normalizedData = [];
        if (isset($data['city'])){
            $normalizedData['city'] = (string)$data['city'];
        }else{
            $normalizedData['city'] = 'Город не указан';
        }
        if (!empty($data['phone'])){
            self::$phone = self::phoneFormatter($data['phone']);
        }
        if (!empty($data['name'])){
            $normalizedData['name'] = $data['name'];
        }
        if (!empty($data['email'])){
            $normalizedData['email'] = $data['email'];
        }
        if (!empty($data['connect'])){
            $normalizedData['connect'] = $data['connect'];
        }
        if (!empty($data['question'])){
            $normalizedData['question'] = $data['question'];
        }
        if (!empty($data['house_type'])){
            $normalizedData['house_type'] = $data['house_type'];
        }
        if (!empty($data['house_square'])){
            $normalizedData['house_square'] = $data['house_square'];
        }
        if (!empty($data['house_money'])){
            $normalizedData['house_money'] = $data['house_money'];
        }
        if (!empty($data['house-date'])){
            $normalizedData['house-date'] = $data['house-date'];
        }
        if (!empty($data['house-place'])){
            $normalizedData['house-place'] = $data['house-place'];
        }
        if (!empty($data['house-credit'])){
            $normalizedData['house-credit'] = $data['house-credit'];
        }
        //TO DO FIX IT!
//        else{
//            throw new Exception('empty $phone! data:' . serialize($data));
//        }
        if (!empty($data['comment'])){
            self::$comment = $data['comment'];
        }
        if (!empty($data['subject'])){
            $normalizedData['subject'] = $data['subject'];
        }
        if (isset($data['action']) && $data['action'] === 'calc' && !empty($data['house_square'])){
            self::$houseSquareValueForBitrixDealInput = $data['house_square'];
        }
        $tempRequestData = self::$request->all();
        foreach ($normalizedData as $key => $item){
            if(isset($tempRequestData[$key])){
                unset($tempRequestData[$key]);
            }
        }
        $normalizedData['else'] = $tempRequestData;
        return $normalizedData;
    }
    /**
     * @param string|int $direction
     */
    public static function setDirection(string|int $direction): void
    {
        self::$direction = $direction;
    }

    /**
     * @param string $data
     */
    public static function setData(string $data): void
    {
        self::$data = $data;
    }

    /**
     * @param string|null $stage_name
     * @return bool
     */
    private static function isClosedStage(?string $stage_name): bool
    {
        return match ($stage_name) {
            'WON', 'LOSE', 'APOLOGY', '2', '1' => true,
            default => false,
        };
    }

    /**
     * @throws GuzzleException
     */
    private static function post($method, $data): array{
        $response = self::$guzzle->post(
            uri: $method,
            options:[
                'method' => 'POST',
                'query'  => $data,
            ]
        );
        return json_decode($response->getBody()->getContents(), true);
    }
    private static function phoneFormatter(string $phone): string{
        if (empty($phone)){
            throw new Exception('empty $phone!');
        }
        $phone = trim($phone);
        $phone = str_replace(array('(',' ','-',')','+'),'',$phone);
        $phone[0] === '8' ? $phone[0] = '7' : null;
        $phone = '+'.$phone;

        return preg_replace(
            array(
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{3})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?(\d{3})[-|\s]?(\d{3})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{2})[-|\s]?(\d{2})[-|\s]?(\d{2})/',
                '/[\+]?([7|8])[-|\s]?\([-|\s]?(\d{4})[-|\s]?\)[-|\s]?(\d{3})[-|\s]?(\d{3})/',
                '/[\+]?([7|8])[-|\s]?(\d{4})[-|\s]?(\d{3})[-|\s]?(\d{3})/',
            ),
            array(
                '+7 ($2) $3-$4-$5',
                '+7 ($2) $3-$4-$5',
                '+7 ($2) $3-$4-$5',
                '+7 ($2) $3-$4-$5',
                '+7 ($2) $3-$4',
                '+7 ($2) $3-$4',
            ),
            $phone
        );
    }
}
