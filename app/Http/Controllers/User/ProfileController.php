<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;
class ProfileController extends Controller
{
    public function execute(){
        $id = Auth::id();
      
        $profile=User::all()->where('id', $id);
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        return view('user.profile_index',[
            'profile'=>$profile,
            'title'=>'Мой профиль',
            'header_banner'=>$header_banner
        ]);
    }

    public function created(Request $request){
        
        $header_banner = DB::table('services')->where('id', 1)->value('text');
        if($request->isMethod('post')){
            
            $id = Auth::id();
            $change = User::all()->where('id', $id)->first();
            if($request->file('foto') != null){
                $file = $request->file('foto');
                $file->move(public_path().'/assets/image/users', $file->getClientOriginalName());
                 $change->foto = $file->getClientOriginalName();
                 
              }
            $change->sex = $request->sex;
            $change->data_birth = $request->data;
            $change->email = $request->email;
            $change->phone = $request->phone;
            $change->avto = $request->avto;
            $change->about = $request->about;
          
            $change->save();
        }
        $id = Auth::id();
        $profile=User::all()->where('id',$id);

        return view('user.crearted_index',[
            'profile'=>$profile,
            'title'=>'Мой профиль',
            'header_banner'=>$header_banner
        ]);
    }
}
