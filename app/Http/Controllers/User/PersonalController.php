<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;

class PersonalController extends Controller
{
    public function execute(){
        $id = Auth::id();
        
         $profile=User::all()->where('id', $id);
         $header_banner = DB::table('services')->where('id', 1)->value('text');
        
        return view('user.personal_index',[
            'profile'=>$profile,
            'title'=>'Мои личные данные',
            'header_banner'=>$header_banner
        ]);
    }
}
