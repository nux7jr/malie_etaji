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
            $this->writeLeads($request,$city, $validated);
            $sender->sendForm($validated, $request);
        }catch (\Exception $err){
            \Log::error('Ошибка отправки формы: ' . $err->getMessage());
        }
    }
    private function writeLeads($request, $city, $validated):void
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
        $stroke_rewrite = date("d.m.y H:i").';'.$city.';'.''.';'.($validated['phone'] ?? 'empty').';'.($validated['email']??'empty email').';'.$city.';'.($validated['name'] ?? 'noname').';'.''.';;'.urldecode($referer).';'.$_SERVER['HTTP_X_REAL_IP']."\n";
        fwrite($fp,$stroke_rewrite);
        fclose($fp);
    }
}
