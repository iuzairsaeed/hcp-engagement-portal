<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;
    public $search = '';
 
    public function render()
    {

        // For Specific Search
        // sleep(1);    
        // $posts = Post::search($this->search)->paginate(10);
        // return view('livewire.show-posts',['posts'=>$posts]);

        // Saarch Or All
        $posts = new Post; 
        $columns = $posts->getFillable(); $posts = Post::query()->whereLike($columns, $this->search)->get();
        return view('livewire.show-posts', [
            'posts' => $posts,
        ]);
    }
}
