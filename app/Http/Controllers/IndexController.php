<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trucking;
use App\Companion;
use App\Transport;
use App\Driver;
use App\Accommodation;
use DB;


class IndexController extends Controller
{
   
    public function execute(){
        //  $trucking = Trucking::orderBy('created_at', 'DESC')->first();
         $trucking= DB::table('truckings')->limit(3)->get();
        
        //  $companion = Companion::orderBy('created_at', 'DESC')->first();
        //  $transport = Transport::orderBy('created_at', 'DESC')->first();
         $transport = DB::table('transports')->limit(3)->get();
         $accommodation = Accommodation::orderBy('created_at', 'DESC')->first();
        $driver = Driver::orderBy('created_at', 'DESC')->first();
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        return view('site.index',[
            'title'=>'Главная',
            'header_banner'=>$header_banner,
            'trucking'=>$trucking,
            // 'companion'=>$companion,
            'transport'=>$transport,
            // 'accommodation'=>$accommodation,
            // 'driver'=>$driver
        ]);
    }
}
