<?php

namespace App\Http\Controllers\Add;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transport;
use Illuminate\Support\Facades\Auth;
use DB;
class TransportController extends Controller
{
    public function execute(Request $request){
        $user = Auth::user();
        if($request->isMethod('post')){
            $transport = new Transport();
            $transport->user_id=$user->id;
            $transport->path = $request->city;
            if($request->bulk !=null){
                $transport->bulk = $request->bulk;
            }
            if($request->length_of_package !=null){
                $transport->length_of_package = $request->length_of_package;
            }
            $transport->name = $request->brand;
            $transport->email = $request->email;
            $transport->price = $request->price;
            if($request->weight != null){
                $transport->weight = $request->weight;
            }
            $transport->year = $request->year;
            $transport->phone = $request->phone;
            $transport->text = $request->text;
            if($request->file('foto') != null){
                $file = $request->file('foto');
                $file->move(public_path().'/assets/image/foto_transport', $file->getClientOriginalName());
                 $transport->foto = $file->getClientOriginalName();
              }
           $transport->save();


        }
        $accommodations = DB::table('accommodations')->limit(3)->get();
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        return view('add.transports_index',[
            'title'=>'Добавить аренду транспорта',
            'accommodations'=>$accommodations,
            'header_banner'=>$header_banner,
            'side_bar_banner'=>$side_bar_banner
        ]);
    }
}
