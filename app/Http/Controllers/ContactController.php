<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use Mail;
use Validator;

class ContactController extends Controller
{
    public function postContact(Request $request){

      $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'name' => 'min:3',
        'subject' => 'min:3',
        'message' => 'min:10',
        'g-recaptcha-response' => 'required|recaptcha',
      ]);

      if ($validator->fails()){
        return back()->withErrors($validator)->withInput($request->all());
      }



      $data = array(
        'email' => $request->email,
        'name' => $request->name,
        'subject' => $request->subject,
        'bodyMessage' => $request->message,
      );

      Mail::send('emails.contact', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('simplonAuch@gmail.com');
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
