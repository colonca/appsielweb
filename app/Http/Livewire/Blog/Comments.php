<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class Comments extends Component
{

    public $post;

    public function  mount($post){
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.blog.comments',[
            'comments' => 'comments'
        ]);
    }
}
