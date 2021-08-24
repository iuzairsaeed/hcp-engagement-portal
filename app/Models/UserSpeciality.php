<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Constant;

class UserSpeciality extends Model
{
    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
        'deleted_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $fillable = ['speciality_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }    
}
