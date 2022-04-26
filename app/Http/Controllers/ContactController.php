<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; 

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {   
        $input = $request->all(); 
        Mail::send('contactMail', array( 

            'name' => $input['name'], 

            'email' => $input['email'], 

            'subject' => $input['subject'], 

            'message' => $input['message'], 

        ), function($message) use ($request){ 

            $message->from($request->email); 

            $message->to('lrvtrankhacnam@gmail.com', 'contact')->subject($request->get('subject')); 

        }); 

        return back()->with('success','Contact Form Submit Successfully!');
    }
}
