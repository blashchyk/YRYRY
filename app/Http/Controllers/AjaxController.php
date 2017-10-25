<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Companion;
class AjaxController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('get')){
            $companions = Companion::where('location', 'like', '{%Киев%}')->orWhere('route', 'like', '{%Киев%}')->get();
           echo $companions->location;
        }
       
    }
}
