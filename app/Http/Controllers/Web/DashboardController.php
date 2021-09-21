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
use App\Models\UserSpeciality;
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
                $users = new User;
                $users = collect($users);
                return view('userdashboard',  compact(['events', 'posts', 'activities', 'users']));
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
            $user = new User; $columns = $user->getFillable(); $users = User::query()->whereLike($columns, $search)->get();

            return view('userdashboard',  compact(['events', 'posts', 'activities','users']));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    
    public function getInteract(Request $request) {
        try {
            User::all()->where('is_admin', false)->sortBy(function ($user) use (&$interact) {
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
            User::all()->where('is_admin', false)->sortBy(function ($user) use (&$experience) {
                $experience['user'][] = $user->name;
                $experience['count'][] = DB::select('SELECT round(SUM(DATEDIFF(date_to , date_from ) / 365)) as sum from experiences where user_id = '.$user->id.';')[0]->sum ?? 0 ;
            })->take(10);

            return \Response::json($experience);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
   
    public function getLocations(Request $request) {
        try {
            $locations = Location::where('id', 'LIKE', ($request['location_id'] ?? null) )->withCount(['user'=>function ($user) {
              $user->where('is_admin', false);
            }])->get();
            foreach ($locations as $l) {
                $locs['country'][] = $l->name; 
                $locs['count'][] = $l->user_count;
            }
            return \Response::json($locs);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function getSpecialities($request) {
        try {
            $speciality = DB::select('SELECT * FROM `users` JOIN specialities ON specialities.id= users.speciality_id WHERE users.speciality_id='.$request['speciality_id'].' AND users.is_admin = false');
            return \Response::json($speciality);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function searchByLoc(Request $request) {
        try {
            $location_id['location_id'] = (int)$request->data['id'];
            $loc = Location::where('id', $location_id['location_id'] )->withCount(['user'=>function ($user) {
                $user->where('is_admin', false);
            }])->get();
            $experience = array();
            $interact = array();

            User::all()->where('is_admin', false)->where('location_id' , $location_id['location_id'])->sortBy(function ($interacts) use (&$experience) {
                $experience['user'][] = $interacts->name;
                $experience['count'][] = DB::select('SELECT round(SUM(DATEDIFF(date_to , date_from ) / 365)) as sum from experiences where user_id = '.$interacts->id.';')[0]->sum ?? 0 ;
            })->take(10);
            
            User::all()->where('is_admin', false)->where('location_id' , $location_id['location_id'])->sortBy(function ($user) use (&$interact) {
                $interact['user'][] = $user->name;
                $interact['count'][] = DB::select('SELECT COUNT(id) as sum from interacts where model_type LIKE "%Activity%" AND user_id = '.$user->id.';')[0]->sum  ;
            })->take(10);

            $pdf = Interact::where('model_type', Activity::class)->whereHas('user', function ($query) use ($location_id) {
                return $query->where('location_id', $location_id)->where('is_admin', false);
            })->count();
            $events_and_hcps =Event::whereHas('interact', function ($query) use ($location_id) {
                return $query->whereHas('user', function ($user) use ($location_id) {
                   return $user->where('location_id', $location_id)->where('is_admin', false);
                });
            })->withCount('interact')->with('user')->get();
            $specialities = Speciality::whereHas('users', function ($query) use ($location_id) {
                return $query->where('location_id', $location_id)->where('is_admin', false);
            })->withCount('users')->get();

            $data['response']=array($loc,$experience,$interact,$pdf,$events_and_hcps,$specialities);
            return $data;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function searchBySpec(Request $request) {
        try {
            $speciality_id['speciality_id'] = (int)$request->data['id'];
            $speciality=DB::table('users')
            ->where('is_admin', false)
            ->join('specialities','specialities.id','users.speciality_id')
            ->where('users.speciality_id',$speciality_id['speciality_id'])
            ->get();
            if($speciality->isEmpty())
            {
                $data['response']=201;
            }
            else{

                $locs[] = Location::withCount(['user'=>function ($query) use ($speciality_id) {
                    return $query->where('speciality_id', $speciality_id)->where('is_admin', false);
                }])->get();
                
                $experience = array();
                $interact = array();
                $experience['user'][]=".";
                $experience['count'][]=0;
                
                User::all()->where('is_admin', false)->where('speciality_id' , $speciality_id['speciality_id'])->sortBy(function ($interacts) use (&$experience) {
                    $experience['user'][] = $interacts->name;
                    $experience['count'][] = DB::select('SELECT round(SUM(DATEDIFF(date_to , date_from ) / 365)) as sum from experiences where user_id = '.$interacts->id.';')[0]->sum ?? 0 ;
                })->take(10);
                
                User::all()->where('is_admin', false)->where('speciality_id' , $speciality_id['speciality_id'])->sortBy(function ($user) use (&$interact) {
                    $interact['user'][] = $user->name;
                    $interact['count'][] = DB::select('SELECT COUNT(id) as sum from interacts where model_type LIKE "%Activity%" AND user_id = '.$user->id.';')[0]->sum  ;
                })->take(10);

                $pdf = Interact::where('model_type', Activity::class)->whereHas('user', function ($query) use ($speciality_id) {
                    return $query->where('speciality_id', $speciality_id)->where('is_admin', false);
                })->count();
                $events_and_hcps =Event::whereHas('user', function ($query) use ($speciality_id) {
                    return $query->where('speciality_id', $speciality_id)->where('is_admin', false);
                })->withCount('interact')->with('user')->get();
                $specialities = Speciality::whereHas('users', function ($query) use ($speciality_id) {
                    return $query->where('users.speciality_id', $speciality_id)->where('is_admin', false);
                })->withCount('users')->get();
    
                $data['response']=array($locs,$experience,$interact,$pdf,$events_and_hcps,$specialities);
            }
            return $data;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function searchByHCP(Request $request) {
        $user_id= $request->data['id'];
        try {
            $experience = array();
            $interact = array();

            $experience['user'][]=".";
            $experience['count'][]=0;

            $experience['user'][] = $request->data['text'];
            $experience['count'][] = DB::select('SELECT round(SUM(DATEDIFF(date_to , date_from ) / 365)) as sum from experiences where user_id = '.$request->data['id'].';')[0]->sum ?? 0 ;
            
            $interact['user'][] = $request->data['text'];
            $interact['count'][] = DB::select('SELECT COUNT(id) as sum from interacts where model_type LIKE "%Activity%" AND user_id = '.$request->data['id'].';')[0]->sum  ;
            $pdf = Interact::where('model_type', Activity::class)->where('user_id',$request->data['id'])->count();
            $events_and_hcps =Event::where('user_id',$request->data['id'])->withCount('interact')->with('user')->get();
            $specialities = Speciality::whereHas('users', function ($query) use ($user_id) {
                return $query->where('users.id', $user_id);
            })->withCount('users')->get();
            $user=User::find($user_id)->first();
            $locations = Location::where('id',$user->location_id )->withCount(['user'=>function ($user) use($user_id) {
                $user->where('id',$user_id );
            }])->get();
            foreach ($locations as $l) {
                $locs['country'][] = $l->name; 
                $locs['count'][] = $l->user_count;
            }
            $data['response']=array($experience,$interact,$pdf,$events_and_hcps,$specialities,$locations);

            return $data; 
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
