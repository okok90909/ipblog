<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Mail;
class ContactsController extends Controller
{
    public function contacts(){
        return view('contacts');
    }
    public function contactsPost(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'message' => 'required'
         ]);
         Mail::send('email',
         array(
             'name' => $request->get('name'),
             'email' => $request->get('email'),
             'user_message' => $request->get('message')
         ), function($message)
     {
         $message->from('ipblog123@gmail.com');
         $message->to("okok90909@gmail.com", 'Admin')->subject('Contact Mail');
     });
        return back()->with('success', 'Thanks for contacting us!');
    }
}
