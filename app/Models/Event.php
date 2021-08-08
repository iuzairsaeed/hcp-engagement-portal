<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
        'deleted_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $fillable = [
        'title',
        'description',
        'date_to',
        'date_from',
        'time',
        'type',
        'presenter_name',
        'location',
        'url',
        'tag',
        'event_attachment',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
