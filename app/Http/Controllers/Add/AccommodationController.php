<?php

namespace App\Http\Controllers\Add;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Accommodation;
use DB;

class AccommodationController extends Controller
{
    public function execute(Request $request){
       
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        //dd(Auth::user()->email);
         if($request->isMethod('post')){
              //dd($request);
            $user = Auth::user();
           
             $accommodation = new Accommodation();
             $accommodation->appartament = $request->appartament;
             $accommodation->user_id=$user->id;
             $accommodation->data_accom = $request->data_accom;
             $accommodation->city = $request->city;
             $accommodation->number_rooms = $request->rooms;
             $accommodation->area = $request->area;
             $accommodation->price = $request->price;
             $accommodation->berths = $request->berths;
             $accommodation->floor = $request->floor;
             $accommodation->location = $request->addres;
             $accommodation->text = $request->text;
             if($request->file('foto') != null){
            $file = $request->file('foto');
            $file->move(public_path().'/assets/image/foto_accomm', $file->getClientOriginalName());
             $accommodation->foto = $file->getClientOriginalName();
          }
             if($request->wifi !=null){
                 $accommodation->wifi = $request->wifi;
             }
             if($request->shower !=null){
                $accommodation->shower = $request->shower;
            }
            if($request->hairdryer !=null){
                $accommodation->hairdryer = $request->hairdryer;
            }
            if($request->iron !=null){
                $accommodation->iron = $request->iron;
            }
            if($request->loggia !=null){
                $accommodation->loggia = $request->loggia;
            }
            if($request->parking !=null){
                $accommodation->parking = $request->parking;
            }
            if($request->cable !=null){
                $accommodation->cable = $request->cable;
            }
            if($request->kettle !=null){
                $accommodation->kettle = $request->kettle;
            }
            if($request->jacuzzi !=null){
                $accommodation->jacuzzi = $request->jacuzzi;
            }
            if($request->microwave !=null){
                $accommodation->microwave = $request->microwave;
            }
            if($request->washer !=null){
                $accommodation->washer = $request->washer;
            }
            if($request->dishwasher !=null){
                $accommodation->dishwasher = $request->dishwasher;
            }
            if($request->tv !=null){
                $accommodation->tv = $request->tv;
            }
            if($request->armored_door !=null){
                $accommodation->armored_door = $request->armored_door;
            }
            if($request->electric_stove !=null){
                $accommodation->electric_stove = $request->electric_stove;
            }
             $accommodation->save();
         }
         $accommodations = DB::table('accommodations')->limit(3)->get();
        return view('add.accommodation_index',[
            'title'=>'Добавить аренду жилья',
            'accommodations'=>$accommodations,
            'header_banner'=>$header_banner,
            'side_bar_banner'=>$side_bar_banner
        ]);
        
    }

    public function house(Request $request){
        echo 'house';
    }
 
}
