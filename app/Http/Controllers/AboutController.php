<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use DB;

class AboutController extends Controller
{
    public function execute(){
        $abouts = About::all();
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $service_banner1 = DB::table('services')->where('id', 3)->value('text');
        $service_banner2 = DB::table('services')->where('id', 4)->value('text');
        return view('site.about_index',[
            'abouts'=>$abouts,
            'title'=>'О сервисе',
            'header_banner'=>$header_banner,
            'service_banner1'=>$service_banner1,
            'service_banner2'=>$service_banner2
        ]);
    }
}
