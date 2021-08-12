<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(['namespace' => 'Web'], function () {
    Auth::routes(['rese' => true, 'verify' => true]);

     Route::group(['middleware' => 'auth' ], function () {
        
        Route::post('registerUser','Auth\RegisterController@register')->name('registerUser');
        Route::resource('users','UserController');
        Route::get('usersList', 'UserController@getList')->name('users.getList');
        Route::get('users-dropdown-list', 'UserController@getUser')->name('users.get-user');

        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('search', 'DashboardController@search')->name('search');
        Route::get('dashboard/list', 'DashboardController@getList')->name('dashboard.getList');

        Route::get('changePassword','ProfileController@showChangePasswordForm');
        Route::post('changePassword','ProfileController@changePassword')->name('changePassword');

        Route::get('profile','ProfileController@showProfileForm')->name('profile.form');
        Route::get('profile/show','ProfileController@showProfile')->name('profile.show');
        Route::post('profile','ProfileController@profile')->name('profile');

        Route::resource('permission','PermissionController');
        Route::get('permission-dropdown-list', 'PermissionController@getPermission')->name('permission.get-permission');
        Route::get('permission-list', 'PermissionController@getList')->name('permission.get-list');
        
        Route::resource('role','RoleController');
        Route::get('role-list', 'RoleController@getList')->name('role.get-list');
        Route::get('role-dropdown-list', 'RoleController@getRole')->name('role.get-role');
        
        Route::resource('post','PostController');
        Route::get('post-list', 'PostController@getList')->name('post.get-list');

        Route::resource('activity','ActivityController');
        Route::get('activity-list', 'ActivityController@getList')->name('activity.get-list');
        
        Route::resource('event','EventController');
        Route::get('event-list', 'EventController@getList')->name('event.get-list');
        Route::post('react', 'EventController@react')->name('event.react');
        Route::get('libraries', 'EventController@libraries');
        Route::get('trainings', 'EventController@trainings');
        
        Route::resource('support','SupportController');
        Route::resource('reaction','ReactionController');
        
        Route::get('communities', 'UserController@index');

        Route::resource('comment', 'CommentController');

        //  Route::get('dashboard', function(){ return view('dashboard'); });
        // Route::get('profile', function(){ return view('pages/profile'); });
        // Route::get('activities', function(){ return view('pages/activities'); });
        //  Route::get('eventcalender', function(){ return view('pages/event_calenders'); }); 
        // Route::get('chatroom', function(){ return view('pages/chatroom'); });
        // Route::get('recentactivity', function(){ return view('pages/recentactivities'); });
        // Route::get('recentpost', function(){ return view('pages/recentpost'); });
        // Route::get('searcha', function(){ return view('pages/search'); });
        // Route::get('profileview', function(){ return view('pages/profileview'); });
        // Route::get('/eventdetails', function(){ return view('pages/eventdetails'); });
    });
    
    Route::get('about', 'PageController@about');
    Route::get('contact', 'PageController@contact');
    Route::get('faq', 'PageController@faq');
    Route::get('chatroom', 'PageController@chatroom');
});


Route::get('terms_conditions', 'Web\PageController@terms_conditions')->where('any', '.*');
Route::get('{any}', 'Web\PageController@home')->where('any', '.*');

