<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Constant;
use Spatie\Permission\Traits\HasRoles;
use Spatie\ModelStatus\HasStatuses;
use App\Notifications\VerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use SoftDeletes, HasApiTokens, Notifiable, HasRoles, HasStatuses;

    protected $hidden = [
        'pin', 'biometric', 'updated_at', 'email_verified_at', 'password', 'remember_token', 'device_token', 'is_admin'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_admin' => 'boolean',
        'email_verified_at' => 'datetime:'.Constant::DATE_FORMAT,
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $guarded = [];

    protected $fillable = [
        'name',
        'username',
        'email',
        'avatar',
        'password',
        'pmdc',
        'speciality',
        'phone',
        'location',
        'cnic',
        'gender',
        'address',
        'street',
        'city',
        'zipcode',
        'dob',
        'is_active',
    ];

    protected $with = [

    ];

    public function getStatusAttribute()
    {
        return $this->status()->name;
    }
    
    public function getRoleAttribute()
    {
        return $this->roles->first()->name;
    }

    public function getAvatarAttribute($value)
    {
        $path = avatarsPath();
        return $path.$value;
    }

    public function sendApiEmailVerificationNotification()
    {
        $this->notify(new VerifyEmail);
    }

    /**
     * Route notifications for the FCM channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForFcm($notification)
    {
        return $this->device_token;
    }

    /**
     * Get the profile associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * Get all of the education for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function education()
    {
        return $this->hasMany(Education::class);
    }

    /**
     * Get all of the experience for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experience()
    {
        return $this->hasMany(Experience::class);
    }
   
    /**
     * Get all of the location for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location()
    {
        return $this->belongsToMany(Location::class, 'user_locations');
    }
    
    /**
     * Get all of the speciality for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function speciality()
    {
        return $this->belongsToMany(Speciality::class , 'user_specialities');
    }

}
