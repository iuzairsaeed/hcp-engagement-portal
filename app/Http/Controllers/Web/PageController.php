<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\User;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        if (! $request->expectsJson()) {
            return redirect('login');
        }
        return response(['message' => 'Not Found'], 404);
    }

    public function terms_conditions()
    {
        $text = config('global.TERMS_CONDITIONS');
        return view('pages.terms_conditions', compact('text'));
    }

    public function about()
    {
        return view('pages.about');
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
    
    public function chatroom()
    {
        $u_id = auth()->id();
       // $users = User::where('id', '!=', $u_id)->get();
        //    $users =  DB::select("SELECT users.*, messages.from_user,messages.content,messages.updated_at
        //    FROM users
        //    INNER join messages on messages.from_user = $u_id 
           
        //    where users.id!=$u_id order by messages.updated_at desc limit 1");

           $users =  DB::select("SELECT users.*,
        (select messages.content  from messages where messages.from_user=$u_id And messages.to_user=users.id order by messages.content ASC limit 1) as content,
        (select messages.updated_at from messages where messages.from_user=$u_id And messages.to_user=users.id order by messages.updated_at ASC limit 1) as up_at

        FROM users  where users.id!=$u_id ");

        return view('pages.chatroom', compact('users'));
    }

}
