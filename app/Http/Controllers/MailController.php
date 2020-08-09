<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Emailsend;
class MailController extends Controller
{
    //
    public function mailsend(Request $request) {
      $to_name = $request->username;
      $to_email = $request->email;
      $data = array(
         'name'=> $request->username,
         'body'=> 'We have received your query, will get out Soon.'
      );
      Mail::send('email.sendmail', $data, function($message) use ($to_name,$to_email) {
         $message->to($to_email,$to_name)
         ->subject('DΣBΛЯƧΉI - Thanks For Query');
      });

      Emailsend::create([
         'username' => $request->username,
         'useremail' => $request->email,
         'message' => $request->message
      ]);

      return redirect()->route('about_me');
   }













}
