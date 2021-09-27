<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Constant;

class Support extends Model
{
    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];
    
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'message',
        'user_id',
    ];
}
