<?php

namespace App\Console\Commands;

use App\Content\main\HousesInfo;
use Carbon\Carbon;
use Illuminate\Console\Command;

class createYmlFeedsYandex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-yml-feeds-yandex';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate feeds houses for yandex';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $feed = self::getHeaderXMLFeedRealty();
        foreach (HousesInfo::$card_elements as $house){
            $feed .= $this->getHeaderFeedOffer($house['id']);
            $feed .= $this->getBodyFeedOffer($house);
            $feed .= self::getFooterFeedOffer();
        }
        $feed .= self::getFooterXMLFeedRealty();
        \File::put(path:base_path().'/resources/Feeds/'.Carbon::now()->format('Y-m-d hh-mm-ss').'.YRL',contents: $feed);
    }

    private static function getHeaderXMLFeedRealty():string
    {
        $header  = '&lt;realty-feed xmlns=&quot;http://webmaster.yandex.ru/schemas/feed/realty/2010-06&quot;&gt;';
        $header .= '&lt;generation-date	&gt;';
        $header .= Carbon::now()->isoFormat('YYYY-MM-DDTHH:mm:ss+03:00');
        $header .= '&lt;/generation-date&gt;';
        return $header;
    }
    private static function getFooterXMLFeedRealty():string
    {
        return '&lt;/realty-feed&gt;';
    }
    private function getHeaderFeedOffer(int $id):string
    {
        return "&lt;offer internal-id=&quot;{$id}&quot;&gt;";
    }
    private static function getFooterFeedOffer():string
    {
        return '&lt;/offer&gt;';
    }
    private function getBodyFeedOffer(array $house):string
    {
        $bodyFeed  = '&lt;type&gt;продажа&lt;/type&gt;';
        $bodyFeed .= '&lt;property-type&gt;жилая&lt;/property-type&gt;';
        $bodyFeed .= "&lt;category&gt;{$house['category']}&lt;/category&gt;";
        $bodyFeed .= "&lt;url&gt;https://malie-etaji.ru/projects/{$house['id']}&lt;/url&gt;";
        $dateNow   = Carbon::now()->isoFormat('YYYY-MM-DDTHH:mm:ss+03:00');
        $bodyFeed .= "&lt;creation-date&gt;{$dateNow}&lt;/creation-date&gt;";
        $bodyFeed .= '&lt;location&gt;';
            $bodyFeed .= '&lt;locality-name&gt;';
            $bodyFeed .= 'Красноярск';
            $bodyFeed .= '&lt;/locality-name&gt;';
        $bodyFeed .= '&lt;/location&gt;';
        $bodyFeed .= '&lt;price&gt;';
            $bodyFeed .= '&lt;price&gt;';
                $bodyFeed .= '&lt;value&gt;';
                $bodyFeed .= $house['price_kit'];
                $bodyFeed .= '&lt;/value&gt;';
                $bodyFeed .= '&lt;currency&gt;';
                $bodyFeed .= __('RUR');
                $bodyFeed .= '&lt;/currency&gt;';
            $bodyFeed .= '&lt;/price&gt;';
        $bodyFeed .= '&lt;/price&gt;';
        $bodyFeed .= '&lt;sales-agent&gt;';
            $bodyFeed .= '&lt;organization&gt;';
            $bodyFeed .= 'Федеральная строительная компания «Малые Этажи»';
            $bodyFeed .= '&lt;/organization&gt;';
        $bodyFeed .= '&lt;/sales-agent&gt;';
        $bodyFeed .= '&lt;floors-total&gt;';
        $bodyFeed .= $house['item_info']['floors'];
        $bodyFeed .= '&lt;/floors-total&gt;';
        $bodyFeed .= '&lt;area&gt;';
            $bodyFeed .= '&lt;value&gt;';
            $bodyFeed .= $house['item_info']['square'];
            $bodyFeed .= '&lt;/value&gt;';
            $bodyFeed .= '&lt;unit&gt;';
            $bodyFeed .= $house['item_info']['unit'];
            $bodyFeed .= '&lt;/unit&gt;';
        $bodyFeed .= '&lt;/area&gt;';
        $bodyFeed .= '&lt;building-name&gt;';
        $bodyFeed .= $house['name'];
        $bodyFeed .= '&lt;/building-name&gt;';
        foreach ($house['big_slider_images'] as $image)
        {
            $image = str_replace('http', 'https', $image);
            $image = str_replace('localhost', 'malie-etaji.ru', $image);
            $bodyFeed .= '&lt;image&gt;';
            $bodyFeed .= $image;
            $bodyFeed .= '&lt;/image&gt;';
        }

        return $bodyFeed;
    }
}
