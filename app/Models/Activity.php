<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{
    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
        'deleted_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $fillable = ['title','description','type','activity_image','activity_doc', 'user_id'];

    public function getActivityImageAttribute($value)
    {
        $path = ($this->type == 'gamification') ? gamificationPath() : clinicalPath() ;
        return $path.$value;
        // return ($value) ? file_exists($path.$value) ? $path.$value : $path.'no-image.png' : null;
    }
    
    public function getActivityDocAttribute($value)
    {
        $path = ($this->type == 'gamification') ? gamificationDocPath() : clinicalDocPath() ;
        return $path.$value;
        // return ($value) ? file_exists($path.$value) ? $path.$value : $path.'no-image.png' : null;
    }
}
