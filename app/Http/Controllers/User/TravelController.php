<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class TravelController extends Controller
{
    public function execute(){
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        return view('user.travel_index',[
            'title'=>'Мои поездки',
            'header_banner'=>$header_banner
        ]);
    }
}
