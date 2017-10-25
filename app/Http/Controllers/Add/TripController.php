<?php

namespace App\Http\Controllers\Add;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Driver;
use DB;
class TripController extends Controller
{
    public function execute(Request $request){
        
        $user = Auth::user();
        
      if($request->isMethod('post')){
         if($request->search == 'попутчик'){
          
             $driver = new Driver();
             $driver->user_id = $user->id;
             $driver->text = $request->text;
             $driver->number_of_available_seats = $request->number_of_available_seats;
             $driver->location = $request->location;
             $driver->route = $request->route;
             $driver->data = $request->data;
             $driver->who_riding = $request->sex;
             $driver->with_whom = $request->proposal;
             $driver->save();
             
         }elseif($request->search == 'груз'){
            echo "груз";
         }
        
      }
       $companion_db = DB::table('companions')->limit(3)->get();
       $header_banner = DB::table('services')->where('id', 1)->value('text');
       $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        return view('add.trip_index',[
            'title'=>'Добавить поездку',
            'user'=>$user,
            'companion_db'=>$companion_db,
            'header_banner'=>$header_banner,
            'side_bar_banner'=>$side_bar_banner
        ]);
    }
}
