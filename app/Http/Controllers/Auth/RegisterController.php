<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Socialite;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'sex' => 'required',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'data_birth' =>'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'sex'=> $data['sex'],
            'first_name' => $data['first_name'],
            'last_name'=>$data['last_name'],
            'email' => $data['email'],
            'data_birth' => $data['data_birth'],
            'password' => bcrypt($data['password']),
        ]);
    }


    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
     public function redirectToProviderFacebook()
     {
         return Socialite::driver('facebook')->redirect();
     }
 
     /**
      * Obtain the user information from Facebook.
      *
      * @return Response
      */
     public function handleProviderCallbackFacebook()
     {
       


         try{
            $socialUser = Socialite::driver('facebook')->user();
      
         }catch(Exeption $e){
            return redirect('/');
         }
         $user = User::where('facebook_id', $socialUser->getId())->first();
     
         if(!$user)
             User::create([
                 'facebook_id'=>$socialUser->getId(),
                 'first_name'=>$socialUser->getName(),
                 //'last_name'=>$socialUser->getName(),
                 'foto'=>$socialUser->getAvatar(),
                 'sex'=>$socialUser['gender'],
                 'email'=>$socialUser->getEmail()
             ]);
        $user = User::where('facebook_id', $socialUser->getId())->first(); 
     
        auth()->login($user);
        return redirect()->route('profile');
        //  // $user->token;
        //  return $user->getEmail();
     }
     
     /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
     public function redirectToProviderVk()
     {
        
        //  return ;
        // return Socialite::with('vkontakte')->redirect();
     }
 
     /**
      * Obtain the user information from Facebook.
      *
      * @return Response
      */
     public function handleProviderCallbackVk()
     {
       

        // $user = Socialite::driver('vkontakte')->user();
        // $accessTokenResponseBody = $user->accessTokenResponseBody;
        // dd($user);
     }
     
}
