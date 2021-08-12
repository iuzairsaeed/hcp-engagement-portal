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
    
    public function showProfile()
    {
        $user = auth()->user();
        return view('users.show', compact('user'));
    }

    public function profile(ProfileUpdateRequest $request)
    {
        $data = $request->all();
        $user = auth()->user();
        // if change password
        if($request->old_password && $request->password){
            $user->password = Hash::make($request->password);
            $user->update();
        }
        // filter user data
        $userData = $request->except(['clinic_name','clinic_address', 'education' , 'experience', 'email' ,'old_password', 'password']);
        if($request->hasFile('avatar')){
            $deleteFile = $user->getAttributes()['avatar'] != 'no-image.png' ? $user->avatar : null;
            $file_name = uploadFile($request->avatar, avatarsPath(), $deleteFile);
            $userData['avatar'] = $file_name;
        }
        // filter profile data
        $profileData = $request->only(['clinic_name','clinic_address']); $profileData['user_id'] = auth()->id();
        $educationData = $request->except([
            'clinic_name','clinic_address', 'experience', 'old_password', 'password', 'name', 'location',
            'speciality','email','phone','pmdc','avatar'
        ]);
        // filter experience data
        $experienceData = $request->except([
            'clinic_name','clinic_address', 'education', 'old_password', 'password', 'name', 'location',
            'speciality','email','phone','pmdc','avatar'
        ]);
        // --------------------------------------------------------------------------------------------------
        // save user
        $userModel = auth()->user();
        $this->model->update($userData, $userModel);
        // save profile
        $profileModel = Profile::where('user_id', auth()->id())->first() ?? new Profile;
        $this->model = new Repository($profileModel);
        $profileModel->exists() ? $this->model->update($profileData, $profileModel) : $this->model->create($profileData) ;
        // save education
        foreach ($educationData['education'] as $key => $value) {
            foreach ($value as $k => $v) {
                $eduInput[$k]["user_id"] = auth()->id();
                $eduInput[$k][$key] = $value[$k];
                $eduInput[$k]["created_at"] = now();
                $eduInput[$k]["updated_at"] = now();
            }
        }
        $educationModel = Education::where('user_id', auth()->id())->get();
        // create new or update
        if(!$educationModel->isEmpty()){
            foreach ($educationModel as $key => $edu){
                $eduInput[$key]["created_at"] = $edu->created;
                $eduInput[$key]["updated_at"] = now();
                $edu->update($eduInput[$key]);
            }
        } else {
            $educationModel = new  Education;
            $this->model = new Repository($educationModel);
            $this->model->insert($eduInput);
        }
        // save experience
        foreach ($experienceData['experience'] as $key => $value) {
            foreach ($value as $k => $v) {
                $expInput[$k]["user_id"] = auth()->id();
                $expInput[$k][$key] = $value[$k];
                $expInput[$k]["created_at"] = now();
                $expInput[$k]["updated_at"] = now();
            }
        }
        $experienceModel = Experience::where('user_id', auth()->id())->get();
        // create new or update
        if(!$experienceModel->isEmpty()){
            foreach ($experienceModel as $key => $exp){
                $expInput[$key]["created_at"] = $exp->created;
                $expInput[$key]["updated_at"] = now();
                $exp->update($expInput[$key]);
            }
        } else {
            $experienceModel = new  Experience;
            $this->model = new Repository($experienceModel);
            $this->model->insert($expInput);
        }
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
