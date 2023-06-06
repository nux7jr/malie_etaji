<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Senders\Bitrix24;

class SendFormController extends Controller
{
    /**
     * send form to Bitrix24 (tiksan_)
     * @param Request $request
     * @return void
     */
    public function createBirtix24(Request $request){
        $validated = $request->validate([
            'phone'     => 'string|required|regex:/^(\+7|8)(\ )?\(?[\d]{3}\)?(\ )?[\d]{3}[\-|\ ]?[\d]{2}[\-|\ ]?[\d]{2}/',
            'name'      => 'string|required',
            'question'  => 'string'
        ]);
    }
}
