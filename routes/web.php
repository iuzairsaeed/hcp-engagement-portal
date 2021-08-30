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
        Route::get('communities', 'UserController@index');
       
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('search', 'DashboardController@search')->name('search');
        Route::get('dashboard/list', 'DashboardController@getList')->name('dashboard.getList');
        Route::get('dashboard/interact', 'DashboardController@getInteract')->name('dashboard.getInteract');
        Route::get('dashboard/experience', 'DashboardController@getExperience')->name('dashboard.getExperience');
        Route::get('dashboard/locations', 'DashboardController@getLocations')->name('dashboard.getLocations');
        Route::post('dashboard/searchLoc', 'DashboardController@searchByLoc')->name('dashboard.searchByLoc');

        Route::get('changePassword','ProfileController@showChangePasswordForm');
        Route::post('changePassword','ProfileController@changePassword')->name('changePassword');

        Route::get('profileShow','ProfileController@showProfileForm')->name('profile.form');
        Route::get('profile','ProfileController@showProfile')->name('profile.show');
        Route::post('profile/edit','ProfileController@profile')->name('profile');

        Route::resource('permission','PermissionController');
        Route::get('permission-dropdown-list', 'PermissionController@getPermission')->name('permission.get-permission');
        Route::get('permission-list', 'PermissionController@getList')->name('permission.get-list');
        
        Route::resource('role','RoleController');
        Route::get('role-list', 'RoleController@getList')->name('role.get-list');
        Route::get('role-dropdown-list', 'RoleController@getRole')->name('role.get-role');
        
        Route::resource('post','PostController');
        Route::get('post-list', 'PostController@getList')->name('post.get-list');

        Route::resource('activity','ActivityController');
        Route::get('download/{activity}', 'ActivityController@download')->name('download');
        Route::get('activity-list', 'ActivityController@getList')->name('activity.get-list');
        
        Route::resource('event','EventController');
        Route::name('event.')->group(function () {
            Route::get('event-list', 'EventController@getList')->name('get-list');
            Route::post('react', 'EventController@react')->name('react');
            Route::get('libraries', 'EventController@libraries')->name('libraries');
            Route::get('trainings', 'EventController@trainings')->name('trainings');
            Route::post('event/join/{event}', 'EventController@join')->name('join');
        });
        
        Route::resource('support','SupportController');
        Route::resource('reaction','ReactionController');
        
        Route::resource('comment', 'CommentController');
        Route::resource('education', 'EducationController');
        Route::resource('experience', 'ExperienceController');

    });
    
    Route::get('about', 'PageController@about');
    Route::get('contact', 'PageController@contact');
    Route::get('faq', 'PageController@faq');
    Route::get('chatroom', 'PageController@chatroom')->name('chatroom');

    Route::get('/load-latest-messages', 'MessagesController@getLoadLatestMessages');
    Route::post('/send', 'MessagesController@postSendMessage');
    Route::get('/fetch-old-messages', 'MessagesController@getOldMessages');

    Route::get('getLocation', 'UserController@getLocation')->name('user.getLocation');
    Route::get('getSpeciality', 'UserController@getSpeciality')->name('user.getSpeciality');

});


Route::get('terms_conditions', 'Web\PageController@terms_conditions')->where('any', '.*');
Route::get('{any}', 'Web\PageController@home')->where('any', '.*');
