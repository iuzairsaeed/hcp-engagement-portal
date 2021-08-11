<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\User;
use App\Models\Event;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            if(auth()->user()->role == "admin"){
                $hcp = User::count();
                $events = Event::count();
                return view('dashboard', compact('hcp','events'));
            } 
            else {
                $events = Event::all()->sortByDesc('updated_at');
                $posts = Post::all()->sortByDesc('updated_at');
                return view('userdashboard',  compact(['events', 'posts']));
            } 
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
