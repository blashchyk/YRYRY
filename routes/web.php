<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' =>'web'], function(){
    Route::get('/',['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::get('/home', function(){
        
        return redirect('/');
        
    });
    Route::post('/messages', ['uses'=>'MessagesController@execute', 'as'=>'message']);
    Route::post('/messages_reply', ['uses'=>'MessagesController@reply', 'as'=>'reply']);
    Route::match(['get', 'post'], '/companions', ['uses'=>'CompanionController@execute', 'as'=>'companions']);
    Route::match(['get', 'post'], '/truckings', ['uses'=>'TruckingController@execute', 'as'=>'truckings']);
    Route::match(['get', 'post'], '/transports', ['uses'=>'TransportController@execute', 'as'=>'transports']);
    Route::match(['get', 'post'], '/accommodations', ['uses'=>'AccommodationController@execute', 'as'=>'accommodations']);
    Route::match(['get', 'post'], '/accommodations_house', ['uses'=>'AccommodationController@house', 'as'=>'house']);
    Route::match(['get', 'post'], '/accommodations_hostel', ['uses'=>'AccommodationController@hostel', 'as'=>'hostel']);
    Route::get('/about', ['uses'=>'AboutController@execute', 'as'=>'about']);
    Route::get('/companions/all', ['uses'=>'CompanionController@all', 'as'=>"companions_all"]);
    Route::get('truckings/all', ['uses'=>'TruckingController@all', 'as'=>'truckings_all']);
    Route::get('transports/all', ['uses'=>'TransportController@all', 'as'=>'transports_all']);
    Route::get('/accommodations/all', ['uses'=>'AccommodationController@all_apartment', 'as'=>'accommodations_all']);
    Route::get('/accommodations/all_house', ['uses'=>'AccommodationController@all_house','as'=>'accommodations_all_house']);
    Route::get('/accommodations/all_hostel', ['uses'=>'AccommodationController@all_hostel', 'as'=>'accommodations_all_hostel']);

    Route::group(['middleware'=>'auth'], function() {
        Route::match(['get', 'post'], '/add_accommodations', ['uses'=>'Add\AccommodationController@execute', 'as'=>'add_accommodations']);
        Route::match(['get', 'post'], '/add_transports', ['uses'=>'Add\TransportController@execute', 'as'=>'add_transports']);
        Route::match(['get', 'post'], '/add_truckings', ['uses'=>'Add\TruckingController@execute', 'as'=>'add_truckings']);
        Route::match(['get', 'post'], '/add_trip', ['uses'=>'Add\TripController@execute', 'as'=>'add_trip']);

        
    });
    Route::get('/detals/bus/{id}', ['uses'=>'DetalsController@bus', 'as'=>'detal_bus']);
    Route::get('/detals/truck/{id}', ['uses'=>'DetalsController@truck', 'as'=>'detal_truck']);
    Route::get('/detals/apartment/{id}', ['uses'=>'DetalsController@apartment', 'as'=>'detal_apartment']);
    Route::get('/detals/companion/{id}', ['uses'=>'DetalsController@companion', 'as'=>'detal_companion']);
    
    

    
    

    Route::match(['get','post'],'/search/travels', ['uses'=>'SearchController@travels', 'as'=>'search_travels']);
    Route::match(['get','post'], '/search/truckings',['uses'=>'SearchController@truckings', 'as'=>'search_truckings']);
    Route::match(['get', 'post'], '/search/transport', ['uses'=>'SearchController@transport', 'as'=>'search_transport']);
    Route::match(['get', 'post'], '/search/accommodation',['uses'=>'SearchController@accommodation', 'as'=>'search_accommodation']);

   
    Route::group(['prefix' => 'user', 'middleware'=>'auth'], function() {
        //user
    Route::match(['get', 'post'], '/messages', ['uses'=>'User\MessageController@execute', 'as'=>'messages']);
    Route::match(['get', 'post'], '/travel', ['uses'=>'User\TravelController@execute', 'as'=>'travel']);
    Route::match(['get', 'post'], '/settings', ['uses'=>'User\SettingController@execute', 'as'=>'settings']);
    Route::get('/alerts',['uses'=>'User\AlertController@execute', 'as'=>'alerts']);
    Route::get('/personal_data',['uses'=>'User\PersonalController@execute', 'as'=>'personal_data']);
    Route::match(['get', 'post'], '/profile', ['uses'=>'User\ProfileController@execute', 'as'=>'profile']);
    Route::match(['get', 'post'], '/created_profile', ['uses'=>'User\ProfileController@created', 'as'=>'profile_created']);

    

    });
    Route::get('/logout',['uses'=>'Auth\LoginController@logout', 'as'=>'logout']);
    

    
    Route::group(['prefix' => 'admin', 'middleware'=>'admin'], function() {
        Route::match(['get', 'post'], '/', ['uses'=>'Admin\IndexController@execute', 'as'=>'admin']);
        Route::match(['get', 'post'], '/travelers',['uses'=>'Admin\IndexController@travelers', 'as'=>'admin_travelers']);
        Route::match(['get', 'post'], '/drivers', ['uses'=>'Admin\IndexController@drivers', 'as'=>'admin_drivers']);
        Route::match(['get', 'post'], '/transports', ['uses'=>'Admin\IndexController@transports', 'as'=>'admin_transports']);
        Route::match(['get', 'post'], '/accommodations', ['uses'=>'Admin\IndexController@accommodations', 'as'=>'admin_accommodations']);
        Route::match(['get', 'post'], '/truckings', ['uses'=>'Admin\IndexController@truckings', 'as'=>'admin_truckings']);
        Route::match(['get', 'post'], '/users',['uses'=>'Admin\IndexController@users', 'as'=>'admin_users']);
    });
    
    
    
});
// Route::get('/companions', function () {
//     return view('search_travelers');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/facebook', ['uses'=>'Auth\RegisterController@redirectToProviderFacebook', 'as'=>'auth_facebook']);
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallbackFacebook');
Route::get('auth/vk', ['uses'=>'Auth\RegisterController@redirectToProviderVk', 'as'=>'auth_vk']);
Route::get('auth/vk/callback', ['uses'=>'Auth\RegisterController@handleProviderCallbackVk']);
// Route::get('auth/facebook', ['uses'=>'Auth\RegisterController@redirectToProvider', 'as'=>'auth_facebook']);
// Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('getRequest',['uses'=>'AjaxController@index']);