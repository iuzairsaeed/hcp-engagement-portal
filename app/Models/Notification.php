<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Constant;

class Notification extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'data',
   ];

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
        'deleted_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $dates = ['created_at'];

    public function getCreatedAtAttribute($value)
    {
        return time_elapsed_string($value);
    }

    public function notifiable()
    {
        return $this->morphTo();
    }
}
