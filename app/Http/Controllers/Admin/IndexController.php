<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use DB;
use App\About;
use App\Companion;
use App\Driver;
use App\Transport;
use App\Accommodation;
use App\Trucking;
use App\User;

class IndexController extends Controller
{
    public function execute(Request $request){
        if($request->isMethod('post')){
            if($request->header_banner){
                $file = $request->file('header_banner');
                $file->move(public_path().'/assets/image/banner', $file->getClientOriginalName());
                $header_banner = Service::find(1);
                $header_banner->text = $file->getClientOriginalName();
                $header_banner->save();

            }
            if($request->side_bar_banner){
                $file = $request->file('side_bar_banner');
                $file->move(public_path().'/assets/image/banner', $file->getClientOriginalName());
                $side_bar_banner = Service::find(2);
                $side_bar_banner->text = $file->getClientOriginalName();
                $side_bar_banner->save();
            }
            if($request->service_banner1){
                $file = $request->file('service_banner1');
                $file->move(public_path().'/assets/image/banner', $file->getClientOriginalName());
                $service_banner1 = Service::find(3);
                $service_banner1->text = $file->getClientOriginalName();
                $service_banner1->save();
            }
            if($request->service_banner2){
                $file = $request->file('service_banner2');
                $file->move(public_path().'/assets/image/banner', $file->getClientOriginalName());
                $service_banner2 = Service::find(4);
                $service_banner2->text = $file->getClientOriginalName();
                $service_banner2->save();
            }
            if($request->text){
               $info = About::find(1);
               $info->description = $request->text;
               $info->save();
            }
            if($request->title1){
                $info = About::find(2);
                $info->title = $request->title1;
                $info->save();
            }
            if($request->title2){
                $info = About::find(3);
                $info->title = $request->title2;
                $info->save();
            }
            if($request->text2){
                $info = About::find(2);
                $info->description = $request->text2;
                $info->save();
            }
            if($request->text3){
                $info = About::find(3);
                $info->description = $request->text3;
                $info->save();
            }
        }
        $header_banner = DB::table('services')->where('id', 1)->value('text');
  
        $side_bar_banner = DB::table('services')->where('id', 2)->value('text');
        $service_banner1 = DB::table('services')->where('id', 3)->value('text');
        $service_banner2 = DB::table('services')->where('id', 4)->value('text');
        $info = DB::table('services')->where('id', 5)->value('text');
  

        return view('admin/index',[
            'title'=>'Админка',
            'header_banner'=>$header_banner,
            'side_bar_banner'=>$side_bar_banner,
            'service_banner1'=>$service_banner1,
            'service_banner2'=>$service_banner2,
            'info'=>$info
        ]);
    }

    public function travelers(Request $request){
        $travelers = DB::table('companions')->get();
        if($request->isMethod('post')){
            $traveler = Companion::find($request->del);
            $traveler->delete();
            $travelers = DB::table('companions')->get();
            return view('admin/travelers',[
                'travelers'=>$travelers
            ]);
        }
        return view('admin/travelers',[
            'travelers'=>$travelers
        ]);
    }

    public function drivers(Request $request){

        $drivers = DB::table('drivers')->get();
     
        if($request->isMethod('post')){
            $driver = Driver::find($request->del);
            $driver->delete();
            $drivers = DB::table('drivers')->get();
            return view('admin/drivers',[
                'drivers'=>$drivers
            ]);
        }
        return view('admin/drivers',[
            'drivers'=>$drivers
        ]);
    }

    public function transports(Request $request){
        $transports = DB::table('transports')->get();
    
        if($request->isMethod('post')){
            $transport = Transport::find($request->del);
            $transport->delete();
            $transports = DB::table('transports')->get();
            return view('admin/transports',[
                'transports'=>$transports
            ]);
        }
        return view('admin/transports',[
            'transports'=>$transports
        ]);
    }

    public function accommodations(Request $request){
        $accommodations = DB::table('accommodations')->get();
  
        if($request->isMethod('post')){
            $accommodation = Accommodation::find($request->del);
            $accommodation->delete();
            $accommodations = DB::table('accommodations')->get();
            return view('admin/accommodations', [
                'accommodations'=>$accommodations
            ]);
        }
        return view('admin/accommodations', [
            'accommodations'=>$accommodations
        ]);
    }

    public function truckings(Request $request){
        $truckings = DB::table('truckings')->get();

        if($request->isMethod('post')){
            $trucking = Trucking::find($request->del);
            $trucking->delete();
            $truckings = DB::table('truckings')->get();
            return view('admin/truckings', [
                'truckings'=>$truckings
            ]);
        }
        return view('admin/truckings', [
            'truckings'=>$truckings
        ]);
    }

    public function users(Request $request){
        $users = User::all();
        if($request->isMethod('post')){
            if($request->del){
                $user = User::find($request->del);
                $user->delete();
                $users = User::all();
                return view('admin/users',[
                    'users'=>$users
                ]);
            }
            if($request->block){
            $user = User::find($request->block);
            $user->block = 'block';
            $user->save();
            $users = User::all();
            return view('admin/users',[
                'users'=>$users
            ]);
             }
             if($request->no_block){
                 $user = User::find($request->no_block);
                 $user->block = '';
                 $user->save();
                 $users = User::all();
                 return view('admin/users',[
                     'users'=>$users
                 ]);
             }
        }
        return view('admin/users',[
            'users'=>$users
        ]);

        
    }
}
