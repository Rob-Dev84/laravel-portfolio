<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // // Send email
        Mail::to('r.manna.design@gmail.com')
            ->send(new ContactMail($request['name'], 
                                    $request['email'], 
                                    $request['message']));

        return ['success' => true];
    }
}
