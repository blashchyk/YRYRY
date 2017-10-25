<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companion;
use DB;

class CompanionController extends Controller
{

    public function execute(){
        $companion_db = DB::table('companions')->limit(3)->get();
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $companions = Companion::all();
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        $city_location = Companion::groupBy('location')->get();
        $city_route = Companion::groupBy('route')->get();
   
        
        return view('site.search_trevelers_index',[
                                    'companions'=>$companions,
                                    'title'=>'Поиск попутчиков',
                                    'header_banner'=>$header_banner,
                                    'companion_db'=>$companion_db,
                                    'side_bar_banner'=>$side_bar_banner,
                                    'city_location'=>$city_location,
                                    'city_route'=>$city_route



                                    ]);
    }
    public function all(){
        $companions = Companion::paginate(9);
        $companions_all = Companion::all();
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        return view('site.search_companions_all', [
        'title'=>'Все попутчики',
        'header_banner'=>$header_banner,
        'companions'=>$companions,
        'companions_all'=>$companions_all,
        'side_bar_banner'=>$side_bar_banner
    ]);
    }
    
}
