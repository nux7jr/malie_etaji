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
            $city = City::getCurrentCity(request()->route()->parameter('subdomain') ?? 'krasnoyarsk');
            $validated = $request->validate([
                'phone'     => ['string','regex:/^(\+7|8)(\ )?\(?[\d]{3}\)?(\ )?[\d]{3}[\-|\ ]?[\d]{2}[\-|\ ]?[\d]{2}/','nullable'],
                'name'      => 'string|nullable',
                'question'  => 'string|nullable',
                'email'     => 'string|nullable'
            ]);
            $validated['city'] = $city;
            $this->writeLeads($city, $validated);
            $sender->sendForm($validated, $request);
        }catch (\Exception $err){
            \Log::error('Ошибка отправки формы: ' . $err->getMessage());
        }
    }
    private function writeLeads($city, $validated):void
    {
        try {
            $fp = fopen("/home/admin/web/centr-polov.ru/public_html/upload/bd/alldealers_leads.txt","a+");
        }catch (\Exception $err){
            $fp = fopen("alldealers_leads.txt","a+");
        }

        $referer = $_SERVER['HTTP_REFERER'];
        $stroke_rewrite = date("d.m.y H:i").';'.$city.';'.''.';'.($validated['phone'] ?? 'empty').';'.($validated['email']??'empty email').';'.$city.';'.($validated['name'] ?? 'noname').';'.''.';;'.urldecode($referer).';'.$_SERVER['HTTP_X_REAL_IP']."\n";
        fwrite($fp,$stroke_rewrite);
        fclose($fp);
    }
}
