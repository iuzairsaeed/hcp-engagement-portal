<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'organization',
        'therapeutic_area',
        'country',
        'city',
        'currently_here',
        'date_from',
        'date_to',
        'user_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
        'deleted_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
