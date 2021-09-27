<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['bail', 'required','alpha_spaces', 'max:255', 'min:3'],
            'email' => ['bail', 'required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['bail','required', 'string', 'min:6'],
            'phone' => ['required','regex:/[0-9+*-*]/'],
            'pmdc' => ['required','regex:/[0-9+*-*]/'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'pmdc' => $data['pmdc'],
            'phone' => $data['phone'],
            'speciality_id' => $data['speciality_id'],
            'location_id' => $data['location_id'],
            'device_token' => $data['device_token'] ?? null,
        ]);
        $user->speciality()->attach([$data['speciality_id']]);
        $user->location()->attach([$data['location_id']]);
        $roleN = Role::where('name', 'normal')->first();
        $user->assignRole([$roleN->id]);

        return $user;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($this->create($request->all())));
        
        return redirect("/");
    }
}
