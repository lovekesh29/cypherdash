<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use  App\BusinessEmail;
use  App\ContactUs;
use Mail;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function website_analyze(Request $request)
    {
        Validator::make($request->all(), [
            'businessEmail' => ['required', 'string', 'email', 'max:255']
        ])->validate();

        BusinessEmail::create([
            'businessEmail' => $request['businessEmail']
        ]);
        $senderInfo['businessEmail'] = $request['businessEmail'];

        //client email
        Mail::send('emails.client_business_analyze', $senderInfo , function($message) use  ($senderInfo){
            $message->to($senderInfo['businessEmail'])->subject
               ('Cypher Dash - End To End Solutions For Your Business');
            $message->from(config('mail.from.address'),config('mail.from.name'));
         });
        Mail::send('emails.admin_business_analyze', $senderInfo, function($message){
        $message->to(config('mail.admin.address'))->subject
            ('Cypher Dash - Business Analysis Form');
        $message->from(config('mail.from.address'),config('mail.from.name'));
        });

        return back()->with('success', 'true');
    }

    public function contact_us(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email'],
            'mobile' => ['required', 'string'],
            'website' => ['required', 'string', 'url'],
            'yourMessage' => ['required', 'string'],
        ])->validate();

        $userInfo = $request->all();

        ContactUs::create([
            'name' => $userInfo['name'],
            'email' => $userInfo['email'],
            'mobile' => $userInfo['mobile'],
            'website' => $userInfo['website'],
            'message' => $userInfo['yourMessage'],
        ]);

        //client email
        Mail::send('emails.client_contactus', $userInfo , function($message) use  ($userInfo){
            $message->to($userInfo['email'], $userInfo['name'])->subject
               ('Cypher Dash - End To End Solutions For Your Business');
            $message->from(config('mail.from.address'),config('mail.from.name'));
         });
        Mail::send('emails.admin_contactus', $userInfo, function($message){
        $message->to(config('mail.admin.address'))->subject
            ('Cypher Dash - Contact Us Form');
        $message->from(config('mail.from.address'),config('mail.from.name'));
        });

        return back()->with('success', 'true');
    }
}
