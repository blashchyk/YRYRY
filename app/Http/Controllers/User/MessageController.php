<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use DB;
use Auth;
use App\User;

class MessageController extends Controller
{
    public function execute(){
        $user_id = Auth::user()->id;
        // $user = User::all()->where('id',25)->toArray();
        // foreach($user as $u){
        //     dd($u['first_name']);
        // }
        $messages=Message::all()->groupBy('parrent_id');
        // dd($messages_send);
        // dd($messages_send);
        // $messages_send = DB::table('messages')->orWhere(function($query){
        //     $query->where('user_id', $user_id)
        //     ->where('to_whom', $user_id);
        // })->groupBy('parrent_id');
        //dd($messages_received);
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        

        return view('user.message_index', [
            'messages'=>$messages,
            'title'=>'Личные сообщения',
            'header_banner'=>$header_banner,
            //'messages_received'=>$messages_received
        ]);
    }
}
