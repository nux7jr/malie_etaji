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
        $city = City::getCurrentCity(request()->route()->parameter('subdomain') ?? 'krasnoyarsk');
        $validated = $request->validate([
            'phone'     => ['string','required','regex:/^(\+7|8)(\ )?\(?[\d]{3}\)?(\ )?[\d]{3}[\-|\ ]?[\d]{2}[\-|\ ]?[\d]{2}/'],
            'name'      => 'string|required',
            'question'  => 'string'
        ]);
        $validated['city'] = $city;
        $sender->sendForm($validated, $request);
    }
}
