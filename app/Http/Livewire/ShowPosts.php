<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $search = '';
 
    public function render()
    {
        $posts = new Post; 
        $columns = $posts->getFillable(); $posts = Post::query()->whereLike($columns, $this->search)->get();
        return view('livewire.show-posts', [
            'posts' => $posts,
        ]);
    }
}
