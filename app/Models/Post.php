<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Constant;
// use App\Models\traits\Search;

class Post extends Model
{
    use SoftDeletes;
    use Search;


    protected $casts = [
        'created_at' => 'datetime:'.Constant::DATE_FORMAT,
        'updated_at' => 'datetime:'.Constant::DATE_FORMAT,
        'deleted_at' => 'datetime:'.Constant::DATE_FORMAT,
    ];

    protected $fillable = ['post_image','title','description', 'user_id'];

    protected $with = [
        'comments'
    ];

    protected $searchable = [
        'title',
        'description',      
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getPostImageAttribute($value)
    {
        $path = postPath();
        return $path.$value;
    }

    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
