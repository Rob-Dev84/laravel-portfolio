<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SendMessageRequest;

class ContactController extends Controller
{
    public function submit(SendMessageRequest $request)
    {
        
        // Send email
        Mail::to('r.manna.design@gmail.com')
            ->send(new ContactMail($request['name'], 
                                    $request['email'], 
                                    $request['message']));

        return ['success' => true];
    }
}
