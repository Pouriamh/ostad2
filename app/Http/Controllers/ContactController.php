<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class ContactController extends Controller
{
    public function postContact(Request $request) {

      $data = array(
        'name' => $request->name,
        'email' => $request->email,
        'bodyMessage' => $request->bodyMessage
      );

      Mail::send('emails.contact-template', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('');
      });

      return view('contact');

    }
}
