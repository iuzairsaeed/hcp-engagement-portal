<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\User;
use App\Models\Activity;
use App\Models\Event;
use App\Models\Post;
use App\Models\Interact;
use App\Models\Speciality;
use App\Models\Location;
use App\Http\Requests\SearchRequest;
use Schema;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            if(auth()->user()->role == "admin"){
                $hcp = User::count();
                $events = Event::count();
                $pdf = Interact::distinct('user_id')->count();
                $experienced = array();
                $interacted = array();
                $interacted = array();
                User::all()->sortBy(function ($user) use (&$experienced) {
                    $experienced[$user->name] = DB::select('SELECT round(SUM(DATEDIFF(date_to , date_from ) / 365)) as sum from experiences where user_id = '.$user->id.';')[0]->sum;
                })->take(10);
                User::all()->sortBy(function ($user) use (&$interacted) {
                    $interacted[$user->name]= DB::select('SELECT COUNT(id) as count from interacts  WHERE user_id = '.$user->id.' AND model_type LIKE "%Activity%" ;')[0]->count;
                })->take(10);
                $events_and_hcps = Event::withCount('interact')->get();
                $specialities = Speciality::withCount('users')->get();
                $locations = Location::withCount('users')->get();
                
                return view('dashboard', compact(
                    'hcp', 'events', 'pdf', 'experienced', 'interacted', 'events_and_hcps', 'specialities', 'locations' 
                ));
            } 
            else {
                $events = Event::all()->sortByDesc('updated_at');
                $posts = Post::all()->sortByDesc('updated_at');
                $activities = Activity::whereHas('interact')->get();
                // $activities = Activity::all();

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
