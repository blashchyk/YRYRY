<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AlertController extends Controller
{
    public function execute(){
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        return view('user.alert_index',[
            'title'=>'Оповещения',
            'header_banner'=>$header_banner
        ]);
    }
}
