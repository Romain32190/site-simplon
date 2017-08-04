<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    public function postContact(Request $request){
      $this->validate($request, [
        'email' => 'required|email',
        'name' => 'min:3',
        'subject' => 'min:3',
        'message' => 'min:10',
        'g-recaptcha-response' => 'required|recaptcha',
      ]);


      $data = array(
        'email' => $request->email,
        'name' => $request->name,
        'subject' => $request->subject,
        'bodyMessage' => $request->message,
      );

      Mail::send('emails.contact', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('roma.maxime1994@gmail.com');
        $message->subject($data['subject']);
      });

      $contact = new Contact;
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->subject = $request->subject;
      $contact->message = $request->message;
      $contact->save();




      return redirect('/contact')->with('status', 'Message bien envoyé!');
    }
}
