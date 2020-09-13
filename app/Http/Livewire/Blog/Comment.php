<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class Comment extends Component
{

    public $post;
    public $comment;
    public $message;

    public function  mount($post,$message,$comment=-1){
        $this->post = $post->id;
        $this->comment = $comment;
        $this->message = $message;
    }

    public function render()
    {
        return view('livewire.blog.comment');
    }
}
