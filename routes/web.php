<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'Web'], function () {
    Auth::routes();

     Route::group(['middleware' => 'auth' ], function () {
        
        Route::post('registerUser','Auth\RegisterController@register')->name('registerUser');
        Route::resource('users','UserController');
        Route::get('usersList', 'UserController@getList')->name('users.getList');
        Route::get('users-dropdown-list', 'UserController@getUser')->name('users.get-user');

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('dashboard/list', 'DashboardController@getList')->name('dashboard.getList');

        Route::get('changePassword','ProfileController@showChangePasswordForm');
        Route::post('changePassword','ProfileController@changePassword')->name('changePassword');

        Route::get('profile','ProfileController@showProfileForm');
        Route::post('profile','ProfileController@profile')->name('profile');

        Route::resource('permission','PermissionController');
        Route::get('permission-dropdown-list', 'PermissionController@getPermission')->name('permission.get-permission');
        Route::get('permission-list', 'PermissionController@getList')->name('permission.get-list');

        Route::resource('role','RoleController');
        Route::get('role-list', 'RoleController@getList')->name('role.get-list');
        Route::get('role-dropdown-list', 'RoleController@getRole')->name('role.get-role');

         Route::get('userdashboard', function(){ return view('userdashboard'); });
        Route::get('profile', function(){ return view('pages/profile'); });
        Route::get('activities', function(){ return view('pages/activities'); });
        Route::get('communities', function(){ return view('pages/communities');  });
         Route::get('eventcalender', function(){ return view('pages/event_calenders'); }); 
        Route::get('about', function(){ return view('pages/about'); });
        Route::get('contact', function(){ return view('pages/contact'); });
        Route::get('chatroom', function(){ return view('pages/chatroom'); });
        Route::get('libraries', function(){ return view('pages/libraries'); });
        Route::get('trainings', function(){ return view('pages/trainings'); });
        Route::get('faq', function(){ return view('pages/faq'); });
        Route::get('recentactivity', function(){ return view('pages/recentactivities'); });
        Route::get('recentpost', function(){ return view('pages/recentpost'); });
        Route::get('viewcomment', function(){ return view('pages/viewcomment'); });
    });

       
   
});

Route::get('about', 'Web\PageController@about');
Route::get('contact', 'Web\PageController@contact');

Route::get('terms_conditions', 'Web\PageController@terms_conditions')->where('any', '.*');
Route::get('{any}', 'Web\PageController@home')->where('any', '.*');

