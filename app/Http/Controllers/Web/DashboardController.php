<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\User;
use App\Models\Activity;
use App\Models\Event;
use App\Models\Post;
use App\Http\Requests\SearchRequest;
use Schema;

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
                $activities = Activity::all()->sortByDesc('updated_at');

                return view('userdashboard',  compact(['events', 'posts', 'activities']));
            } 
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function search(SearchRequest $request) {
        try {
            $search = $request->search; 
            session(['search' => $search]);
            $post = new Post; $columns = $post->getFillable(); $posts = Post::query()->whereLike($columns, $search)->get();
            $activity = new Activity; $columns = $activity->getFillable(); $activities = Activity::query()->whereLike($columns, $search)->get();
            $event = new Event; $columns = $event->getFillable(); $events = Event::query()->whereLike($columns, $search)->get();
            return view('userdashboard',  compact(['events', 'posts', 'activities']));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
