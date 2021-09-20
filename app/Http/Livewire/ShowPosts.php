<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $search = '';
 
    public function render()
    {
        // sleep(1);    
        // $posts = Post::search($this->search)->paginate(10);
        // return view('livewire.show-posts',['posts'=>$posts]);

        $posts = new Post; 
        $columns = $posts->getFillable(); $posts = Post::query()->whereLike($columns, $this->search)->paginate(10);
        return view('livewire.show-posts', [
            'posts' => $posts,
        ]);
    }
}
