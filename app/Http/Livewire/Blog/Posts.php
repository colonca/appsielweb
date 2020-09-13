<?php

namespace App\Http\Livewire\Blog;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.blog.posts',[
            'posts' => Post::paginate(10),
        ]);
    }
}
