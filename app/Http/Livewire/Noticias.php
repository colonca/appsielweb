<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class Noticias extends Component
{
    public function render()
    {
        $post = Post::all()->take(3);
        return view('livewire.noticias',[
            'posts' => $post,
        ]);
    }
}
