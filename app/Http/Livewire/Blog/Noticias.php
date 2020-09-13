<?php

namespace App\Http\Livewire\Blog;

use App\Post;
use Livewire\Component;

class Noticias extends Component
{
    public function render()
    {
        $post = Post::all()->take(3);
        return view('livewire.blog.noticias',[
            'posts' => $post,
        ]);
    }
}
