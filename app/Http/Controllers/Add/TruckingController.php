<?php

namespace App\Http\Controllers\Add;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Trucking;
use DB;
class TruckingController extends Controller
{
    public function execute(Request $request){
        $user = Auth::user();
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        if($request->isMethod('post')){
            if($request->file('foto')){
              $file = $request->file('foto');
            
            $file->move(public_path().'/assets/image/foto_trucking', $file->getClientOriginalName());  
            }
            
       
            $cargo = new Trucking();
            $cargo->user_id = $user->id;
            $cargo->location = $request->location;
            $cargo->route = $request->route;
            $cargo->data = $request->data;
            if($request->data_time){
                 $cargo->data_time = $request->data_time;
            }
            if($request->length_package){
                $cargo->length_package = $request->length_package;
            }
            if($request->maximum_load_weight){
                $cargo->weight = $request->maximum_load_weight;
            }
            if($request->arrival_time){
                $cargo->arrival_time = $request->arrival_time;
            }
            if($request->width_package){
                $cargo->width_package = $request->width_package;
            }
            if($request->sex){
               $cargo->sex = $request->sex; 
            }
            if($request->search){
               $cargo->search = $request->search; 
            }
            if($request->proposal){
                $cargo->proposal = $request->proposal;
            }
            
            $cargo->email = $request->email;
            $cargo->phone = $request->tel;
            $cargo->text = $request->text;
            if($request->file('foto')){
               $cargo->foto = $file->getClientOriginalName(); 
            }
            
            $cargo->save();
           
        }
        $companion_db = DB::table('companions')->limit(3)->get();
        //dd($user);

        return view('add.trucking_index',[
            'title'=>'Добавить грузоперевозку',
            'user'=>$user,
            'header_banner'=>$header_banner,
            'side_bar_banner'=>$side_bar_banner,
            'companion_db'=>$companion_db
        ]);
    }
}
