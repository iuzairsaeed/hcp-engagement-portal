<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Constant;

class Comment extends Model
{

    use SoftDeletes;

    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $fillable = ['text','post_id'];

    protected $with = [
        'user'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // public function post()
    // {
    //     return $this->belongsTo(Post::class);
    // }

    public function replies() {
        return $this->hasMany(Comment::class, 'parent_id');
    }

}
