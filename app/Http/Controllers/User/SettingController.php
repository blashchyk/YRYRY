<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use DB;
class SettingController extends Controller
{
    public function execute(){
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        if($_POST){
            dd($_POST);
        }
        $settings=Setting::all()->where('user_id',1);
     
        return view('user.settind_index',[
            'settings'=>$settings,
            'title'=>'Настройки аккаунта',
            'header_banner'=>$header_banner
        ]);
    }
}
