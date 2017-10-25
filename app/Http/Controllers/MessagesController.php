<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function execute(Request $request){
       if($request->isMethod('post')){
            // dd($request);
           $message = new Message();
           $message->to_whom =$request->user_id;
           $message->user_id = $request->from_whom;
           $message->text = $request->text;
           $message->save();
           return redirect()->route('messages');

       }
    }

    public function reply(Request $request){
      
        if($request->ismethod('post')){
            // dd($request);
            $message = new Message();
            $message->parrent_id = $request->messages_id;
            $message->user_id = $request->user_id;
            $message->to_whom = $request->user_messanger;
            $message->text = $request->message;
            $message->save();
            return redirect()->route('messages');
        }
    }
}
