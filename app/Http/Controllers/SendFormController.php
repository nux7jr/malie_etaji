<?php

namespace App\Http\Controllers;

use App\Helpers\Senders\Interface\SendFormInterface;
use App\Models\City;
use Illuminate\Http\Request;

class SendFormController extends Controller
{
    /**
     * send form to Service binding in ServiceProvider
     * @param Request $request
     * @param SendFormInterface $sender
     * @return void
     */
    public function sendForm(Request $request,SendFormInterface $sender){
        try {
            $validated = self::validateRequest($request);
            $validated = self::addCommentToInputData($validated, $request);
            $validated = self::detectCityAndAddToInputData($validated);

            $this->writeLeadsToFile($request, $validated);
            $sender->sendForm($validated, $request);
        }catch (\Exception $err){
            \Log::error('Ошибка отправки формы: ' . $err->getMessage() . ' DATA: ' . serialize($request->toArray()));
        }
    }

    /**
     * @param array $validated
     * @return array
     */
    private static function detectCityAndAddToInputData(array $validated):array
    {
        $city = City::getCurrentCity(request()->route()->parameter('subdomain') ?? 'krasnoyarsk');
        $validated['city'] = $city;
        return $validated;
    }
    /**
     * @param Request $request
     * @return array
     */
    private static function validateRequest(Request $request):array
    {
        return $request->validate([
            'phone'             => ['string','regex:/^(\+7|8)(\ )?\(?[\d]{3}\)?(\ )?[\d]{3}[\-|\ ]?[\d]{2}[\-|\ ]?[\d]{2}/','nullable'],
            'name'              => 'string|nullable',
            'question'          => 'string|nullable',
            'email'             => 'string|nullable',
            'house_type'        => 'string|nullable',
            'house_square'      => 'string|nullable',
            'house_material'    => 'string|nullable',
            'house_area'        => 'string|nullable',
            'house_money'       => 'string|nullable',
            'type'              => 'string|nullable',
            'action'            => 'string|nullable',
            'time'              => 'string|nullable',
            'connect'           => 'string|nullable',
            'house-date'        => 'string|nullable',
            'house-place'       => 'string|nullable',
            'house-credit'      => 'string|nullable',
            'house_size'        => 'string|nullable',
            'house_price'       => 'string|nullable',
            'mortgage'          => 'string|nullable',
            'price'             => 'numeric',
            'start-payment'     => 'numeric',
            'loan-term'         => 'numeric',
            'subject'           => 'string|nullable',
        ]);
    }

    /**
     * @param array $validated
     * @param Request $request
     * @return array
     */
    private static function addCommentToInputData(array $validated, Request $request):array
    {
        if (isset($validated['action']) && $validated['action'] === 'calc'){
            $validated['comment'] = self::getCalcQuizMessage($validated, $request);
            $validated['subject'] = 'Пройден КВИЗ на сайте malie-etaji.ru';
        }

        if (isset($validated['action']) && $validated['action'] === 'consut'){
            $validated['comment'] = self::getCallQuizMessage($validated, $request);
            $url = parse_url($request->server('HTTP_REFERER'));
            $url = ($url['host'] ?? '') . ($url['path'] ?? '');
            $validated['subject'] = 'Заказали консультацию на сайте ' . $url . PHP_EOL;
        }

        if (isset($validated['mortgage'])){
            $validated['comment'] = self::getCalcMainMessage($validated, $request);
            $url = parse_url($request->server('HTTP_REFERER'));
            $url = ($url['host'] ?? '') . ($url['path'] ?? '');
            $validated['subject'] = 'Подана заявка на Ипотеку на сайте ' . $url . PHP_EOL;
        }

        if (isset($validated['house_size']) && isset($validated['house-place']) && isset($validated['house-credit'])){
            $validated['comment'] = self::getConstructorMessage($validated, $request);
            $url = parse_url($request->server('HTTP_REFERER'));
            $url = ($url['host'] ?? '') . ($url['path'] ?? '');
            $validated['subject'] = 'Подана заявка в конструкторе дома на сайте ' . $url . PHP_EOL;
        }
        return $validated;
    }
    /**
     * @param Request $request
     * @param $phone
     * @param string $subject
     * @return string
     */
    private static function getHeaderComment(Request $request, $phone, string $subject): string
    {
        $url = parse_url($request->server('HTTP_REFERER'));
        $url = ($url['host'] ?? '') . ($url['path'] ?? '');
        $message = $subject . ' ' . $url . PHP_EOL;
        $message .= 'Уникальный идентификатор посетителя: ' . $_SERVER['HTTP_X_REAL_IP'] . PHP_EOL;
        $message .= 'Телефон: ' . ($phone ?? '') . PHP_EOL;
        return $message;
    }

    /**
     * @param array $inputValidatedData
     * @param Request $request
     * @return string
     */
    private static function getConstructorMessage(array $inputValidatedData, Request $request): string
    {
        $message = self::getHeaderComment($request, $inputValidatedData['phone'], 'Оформили заявку в конструкторе');
        $message .= 'Имя: ' . ($inputValidatedData['name'] ?? '')  . PHP_EOL;
        $message .= 'URL с которого была отправлена форма: ' . $request->server('HTTP_REFERER')  . PHP_EOL;
        $message .= 'Данные с конструктора дома:' . PHP_EOL;
        $message .= 'Тип дома: ' . $inputValidatedData['house_type'] . PHP_EOL;
        $message .= 'Размер дома: ' . $inputValidatedData['house_size'] . PHP_EOL;
        $message .= 'Стоимость дома: ' . $inputValidatedData['house_price'] . ' млн.' . PHP_EOL;
        $message .= 'Срок начала строительства: ' . $inputValidatedData['house-date'] . PHP_EOL;
        $message .= 'Есть ли участок для строительства: ' . $inputValidatedData['house-place'] . PHP_EOL;
        $message .= 'Актуальна ли ипотека: ' . $inputValidatedData['house-credit'] . PHP_EOL;
        return $message;
    }
    /**
     * @param Request $request
     * @param array $validated
     * @return void
     */
    private function writeLeadsToFile(Request $request, array $validated):void
    {
        try {
            $fp = fopen("/home/admin/web/centr-polov.ru/public_html/upload/bd/alldealers_leads.txt","a+");
        }catch (\Exception $err){
            $fp = fopen("alldealers_leads.txt","a+");
        }

        $referer = $_SERVER['HTTP_REFERER'];
        if (str_contains($referer, '?')){
            if (!str_contains($referer, 'utm_source')){
                !empty($request->session()->get('utm')['utm_source']) ? $referer .= '&utm_source=' . $request->session()->get('utm')['utm_source'] : '';
            }
            if (!str_contains($referer, 'utm_medium')){
                !empty($request->session()->get('utm')['utm_medium']) ? $referer .= '&utm_medium=' . $request->session()->get('utm')['utm_medium'] : '';
            }
            if (!str_contains($referer, 'utm_campaign')){
                !empty($request->session()->get('utm')['utm_campaign']) ? $referer .= '&utm_campaign=' . $request->session()->get('utm')['utm_campaign'] : '';
            }
            if (!str_contains($referer, 'utm_term')){
                !empty($request->session()->get('utm')['utm_term']) ? $referer .= '&utm_term=' . $request->session()->get('utm')['utm_term'] : '';
            }
            if (!str_contains($referer, 'utm_content')){
                !empty($request->session()->get('utm')['utm_content']) ? $referer .= '&utm_content=' . $request->session()->get('utm')['utm_content'] : '';
            }
        }
        else{
            $referer .= '?';
            if (!str_contains($referer, 'utm_source')){
                !empty($request->session()->get('utm')['utm_source']) ? str_ends_with($referer, '?') ? $referer .= 'utm_source=' . $request->session()->get('utm')['utm_source'] : $referer .= '&utm_source=' . $request->session()->get('utm')['utm_source'] : '';
            }
            if (!str_contains($referer, 'utm_medium')){
                !empty($request->session()->get('utm')['utm_medium']) ? str_ends_with($referer, '?') ? $referer .= 'utm_medium=' . $request->session()->get('utm')['utm_medium'] : $referer .= '&utm_medium=' . $request->session()->get('utm')['utm_medium'] : '';
            }
            if (!str_contains($referer, 'utm_campaign')){
                !empty($request->session()->get('utm')['utm_campaign']) ? str_ends_with($referer, '?') ? $referer .= 'utm_campaign=' . $request->session()->get('utm')['utm_campaign'] : $referer .= '&utm_campaign=' . $request->session()->get('utm')['utm_campaign'] : '';
            }
            if (!str_contains($referer, 'utm_term')){
                !empty($request->session()->get('utm')['utm_term']) ? str_ends_with($referer, '?') ? $referer .= 'utm_term=' . $request->session()->get('utm')['utm_term'] : $referer .= '&utm_term=' . $request->session()->get('utm')['utm_term'] : '';
            }
            if (!str_contains($referer, 'utm_content')){
                !empty($request->session()->get('utm')['utm_content']) ? str_ends_with($referer, '?') ? $referer .= 'utm_content=' . $request->session()->get('utm')['utm_content'] : $referer .= '&utm_content=' . $request->session()->get('utm')['utm_content'] : '';
            }
        }
        $stroke_rewrite = date("d.m.y H:i").';'.($validated['city'] ?? 'no city').';'.''.';'.($validated['phone'] ?? 'empty').';'.($validated['email']??'empty email').';'.($validated['city'] ?? 'no city').';'.($validated['name'] ?? 'noname').';'.''.';;'.urldecode($referer).';'.$_SERVER['HTTP_X_REAL_IP']."\n";
        fwrite($fp,$stroke_rewrite);
        fclose($fp);
    }

    /**
     * @param array $inputValidatedData
     * @param Request $request
     * @return string
     */
    private static function getCalcQuizMessage(array $inputValidatedData, Request $request): string
    {
        $message = 'Пройден КВИЗ на сайте malie-etaji.ru' . PHP_EOL;
        $message .= 'Уникальный идентификатор посетителя: ' . $_SERVER['HTTP_X_REAL_IP'] . PHP_EOL;
        $message .= 'Телефон: ' . ($inputValidatedData['phone'] ?? '')  . PHP_EOL;
        $message .= 'URL с которого была отправлена форма: ' . $request->server('HTTP_REFERER')  . PHP_EOL;
        $message .= 'Способ отправки: ' . ($inputValidatedData['type'] ?? '') . PHP_EOL;
        $message .= 'Ответы на квиз:' . PHP_EOL;
        $message .= 'Какой объект планируете строить: ' .
            ($inputValidatedData['house_type'] ?? '') . PHP_EOL;
        $message .= 'Какой площади дом вас интересует: ' .
            ($inputValidatedData['house_square'] ?? '') . PHP_EOL;
        $message .= 'Материал, из которого планируете строительство дома: ' .
            ($inputValidatedData['house_material'] ?? '') . PHP_EOL;
        $message .= 'Имеется ли у вас земельный участок: ' .
            ($inputValidatedData['house_area'] ?? '') . PHP_EOL;
        $message .= 'Какой бюджет выделен на строительство: ' .
            ($inputValidatedData['house_money'] ?? '') . PHP_EOL;
        return $message;
    }

    /**
     * @param array $inputValidatedData
     * @param Request $request
     * @return string
     */
    private static function getCallQuizMessage(array $inputValidatedData, Request $request):string
    {
        $message = self::getHeaderComment($request, $inputValidatedData['phone'], 'Заказали консультацию на сайте');
        $message .= 'Удобное время для звонка: ' . ($inputValidatedData['time'] ?? '')  . PHP_EOL;
        $message .= 'URL с которого была отправлена форма: ' . $request->server('HTTP_REFERER')  . PHP_EOL;
        return $message;
    }

    /**
     * @param array $inputValidatedData
     * @param Request $request
     * @return string
     */
    private static function getCalcMainMessage(array $inputValidatedData, Request $request):string
    {
        $message = self::getHeaderComment($request, $inputValidatedData['phone'], 'Оформили заявку в ипотечном калькуляторе на сайте');
        $message .= 'Имя: ' . ($inputValidatedData['name'] ?? '')  . PHP_EOL;
        $message .= 'URL с которого была отправлена форма: ' . $request->server('HTTP_REFERER')  . PHP_EOL;
        $message .= 'Данные с ипотечного калькулятора:' . PHP_EOL;
        $message .= 'Программа: ' . $inputValidatedData['mortgage'] . PHP_EOL;
        $message .= 'Стоимость дома: ' . $inputValidatedData['price'] . PHP_EOL;
        $message .= 'Первоначальный взнос: ' . $inputValidatedData['start-payment'] . PHP_EOL;
        $message .= 'Срок кредита: ' . $inputValidatedData['loan-term'] . ' лет' . PHP_EOL;
        return $message;
    }
}
