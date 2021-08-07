<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\ChangePasswordRequest;
use App\Http\Requests\Auth\ProfileUpdateRequest;
use App\Repositories\Repository;
use App\Models\User;
use App\Models\Profile;
use App\Models\Education;
use App\Models\Experience;
use Hash;

class ProfileController extends Controller
{

    protected $model;

    public function __construct(User $model)
    {
        $this->model = new Repository($model);
    }


    public function showProfileForm()
    {
        $user = auth()->user();
        return view('auth.profile', compact('user'));
    }

    public function profile(ProfileUpdateRequest $request)
    {

        $user = auth()->user();
        $data = $request->all();
        $userData = $request->except(['clinic_name','clinic_address', 'education' , 'experience', 'email' ,'old_password', 'password']);
        if($request->hasFile('avatar')){
            $deleteFile = $user->getAttributes()['avatar'] != 'no-image.png' ? $user->avatar : null;
            $file_name = uploadFile($request->avatar, avatarsPath(), $deleteFile);
            $userData['avatar'] = $file_name;
        }

        $profileData = $request->only(['clinic_name','clinic_address']); $profileData['user_id'] = auth()->id();
        $educationData = $request->except([
            'clinic_name','clinic_address', 'experience', 'old_password', 'password', 'name', 'location',
            'speciality','email','phone','pmdc','avatar'
        ]);
        $experienceData = $request->except([
            'clinic_name','clinic_address', 'education', 'old_password', 'password', 'name', 'location',
            'speciality','email','phone','pmdc','avatar'
        ]);

        $userModel = auth()->user();
        $this->model->update($userData, $userModel);

        $profileModel = Profile::where('user_id', auth()->id())->first() ?? new Profile;
        $this->model = new Repository($profileModel);
        $profileModel->exists() ? $this->model->update($profileData, $profileModel) : $this->model->create($profileData) ;

        return redirect()->back()->with('success', 'Profile has been updated.');
    }

    public function showChangePasswordForm()
    {
        return view('auth.passwords.changePassword');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $user = auth()->user();
        $user->password = Hash::make($request->password);
        $user->update();

        return redirect()->back()->with('success', 'Password has been updated.');
    }
}
