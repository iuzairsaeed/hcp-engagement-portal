<?php

namespace App\Providers;

use View;
use App\Models\User;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Constant;
use App\Models\Notification;
use App\Observers\UserObserver;
use App\Observers\PostObserver;
use App\Console\Commands\ModelMakeCommand;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;
use Validator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        date_default_timezone_set("Asia/Karachi");

        //Add this custom validation rule.
        Validator::extend('alpha_spaces', function ($attribute, $value) {
            return preg_match("/^[\pL\s]+$/u", $value); 
        });
        
        // Command for models
        Schema::defaultStringLength(191);
        $this->app->extend('command.model.make', function ($command, $app) {
            return new ModelMakeCommand($app['files']);
        });

        Builder::macro('whereLike', function($attributes, string $searchTerm) {
            foreach($attributes as $attribute) {
               $this->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
            }
            return $this;
         });


         // // Registering user CRUD observer
        User::observe(UserObserver::class);
        
        // // Registering post CRUD observer
        Post::observe(PostObserver::class);
        

        // View Notifications on Admin Web
        // view()->composer('inc.navbar', function($view){
        //     $view->with('notifications', auth()->user()->unreadNotifications );
        // });
        // View Notifications on Admin Web
        // View::share('notifications', Notification::where('user_id' , 1 )->latest()->limit(8)->get());
    }
}
