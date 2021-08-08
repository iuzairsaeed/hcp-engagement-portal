<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
        'deleted_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $fillable = ['post_image','title','description'];

    public function getPostImageAttribute($value)
    {
        $path = postPath();
        return $path.$value;
        // return ($value) ? file_exists($path.$value) ? $path.$value : $path.'no-image.png' : null;
    }
}
