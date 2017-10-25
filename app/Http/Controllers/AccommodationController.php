<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation;
use DB;
use Illuminate\Support\Facades\Auth;

class AccommodationController extends Controller
{
    
    public function execute(){
        
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
    $accommodations = DB::table('accommodations')->where('appartament', 'apartment')->limit(3)->get();
    $city_accommodations=Accommodation::groupBy('city')->get();
        $type = 'квартиры';
        $route = 'accommodations_all';
        //dd($accommodations);
        return view('site.accommodation_index',[
                                                'accommodations'=>$accommodations,
                                                'title'=>'Аренда жилья',
                                                'header_banner'=>$header_banner,
                                                'side_bar_banner'=>$side_bar_banner,
                                                'city_accommodations'=>$city_accommodations,
                                                'type'=>$type,
                                                'route'=>$route
        ]);
    }

    public function all_apartment(Request $request){
        // dd($request);
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $accommodations = Accommodation::where('appartament', 'apartment')->paginate(9);
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        return view('site.accommodations_search_all', [
            'title'=>'Вся аренда',
            'header_banner'=>$header_banner,
            'accommodations'=>$accommodations,
            'side_bar_banner'=>$side_bar_banner,
            'appartament'=>'квартир'
        ]);
    }
    public function all_house(Request $request){
        $route = 'accommodations_all_house';
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $accommodations = Accommodation::where('appartament', 'house')->paginate(9);
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        return view('site.accommodations_search_all', [
            'title'=>'Вся аренда',
            'header_banner'=>$header_banner,
            'accommodations'=>$accommodations,
            'side_bar_banner'=>$side_bar_banner,
            'appartament'=>'домов',
            'route'=>$route
        ]);
    }
    public function house(){
      
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
    $accommodations = DB::table('accommodations')->where('appartament', 'house')->limit(3)->get();
    $city_accommodations=Accommodation::groupBy('city')->get();
  $type = 'дома';
  $route = 'accommodations_all_house';
        //dd($accommodations);
        return view('site.accommodation_index',[
                                                'accommodations'=>$accommodations,
                                                'title'=>'Аренда жилья',
                                                'header_banner'=>$header_banner,
                                                'side_bar_banner'=>$side_bar_banner,
                                                'city_accommodations'=>$city_accommodations,
                                                'type'=>$type,
                                                'route'=>$route
        ]);
    }

    public function hostel(){
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
    $accommodations = DB::table('accommodations')->where('appartament', 'hostel')->limit(3)->get();
    $city_accommodations=Accommodation::groupBy('city')->get();
  $type = 'хостелы';
  $route = 'accommodations_all_hostel';
        //dd($accommodations);
        return view('site.accommodation_index',[
                                                'accommodations'=>$accommodations,
                                                'title'=>'Аренда жилья',
                                                'header_banner'=>$header_banner,
                                                'side_bar_banner'=>$side_bar_banner,
                                                'city_accommodations'=>$city_accommodations,
                                                'type'=>$type,
                                                'route'=>$route
        ]);
    }

    public function all_hostel(Request $request){
        $route = 'accommodations_all_hostel';
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        $accommodations = Accommodation::where('appartament', 'hostel')->paginate(9);
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        return view('site.accommodations_search_all', [
            'title'=>'Вся аренда',
            'header_banner'=>$header_banner,
            'accommodations'=>$accommodations,
            'side_bar_banner'=>$side_bar_banner,
            'appartament'=>'хостелов',
            'route'=>$route
        ]);
    }
}
