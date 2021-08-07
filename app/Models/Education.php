<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
        'deleted_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];
    protected $fillable = [
        'level',
        'type',
        'field',
        'school',
        'country',
        'city',
        'currently_here',
        'date_from',
        'date_to',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }    
}
