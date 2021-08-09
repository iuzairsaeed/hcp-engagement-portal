<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Repository;
use App\Models\User;
use App\Models\Event;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->role == "admin"){
            $hcp = User::count();
            $events = Event::count();
            return view('dashboard', compact('hcp','events'));
        } else {
            return view('userdashboard');
        } 
    }
}
