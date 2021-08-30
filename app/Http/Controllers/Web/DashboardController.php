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
                $pdf = Interact::where('model_type', Activity::class)->count();
                $events_and_hcps = Event::withCount('interact')->get();
                $specialities = Speciality::withCount('users')->get();

                return view('dashboard', compact(
                    'hcp', 'events', 'pdf', 'events_and_hcps', 'specialities', 
                ));
            } 
            else {
                $events = Event::all()->sortByDesc('updated_at');
                $posts = Post::all()->sortByDesc('updated_at');
                $activities = Activity::whereHas('interact')->get();

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
    
    public function getInteract(Request $request) {
        try {
            User::all()->sortBy(function ($user) use (&$interact) {
                $interact['user'][] = $user->name;
                $interact['count'][] = DB::select('SELECT COUNT(id) as sum from interacts where model_type LIKE "%Activity%" AND user_id = '.$user->id.';')[0]->sum  ;
            })->take(10);
            return \Response::json($interact);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function getExperience(Request $request) {
        try {
            $experience = array();
            User::all()->sortBy(function ($user) use (&$experience) {
                $experience['user'][] = $user->name;
                $experience['count'][] = DB::select('SELECT round(SUM(DATEDIFF(date_to , date_from ) / 365)) as sum from experiences where user_id = '.$user->id.';')[0]->sum ?? 0 ;
            })->take(10);

            return \Response::json($experience);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
   
    public function getLocations($request) {
        try {
            $locations = Location::where('id', 'LIKE', ($request['location_id'] ?? null) )->withCount('users')->get();
            foreach ($locations as $l) {
                $locs['country'][] = $l->name; 
                $locs['count'][] = $l->users_count;
            }
            return \Response::json($locs);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function searchByLoc(Request $request) {
        try {
            $location_id['location_id'] = (int)$request->data['id'];
            $loc = $this->getLocations($location_id);
            $exp = $this->getExperience($location_id);
            dd($exp);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
