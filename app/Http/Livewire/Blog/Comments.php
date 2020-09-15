<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class Comments extends Component
{

    public $post;
    public $comments;

    public function  mount($post){
        $this->post = $post;
        $this->comments =  $this->post->comments()->orderBy('created_at')->get();
    }

    protected $listeners = ['newComment'];

    public function newComment(){
        $this->comments =  $this->post->comments()->orderBy('created_at')->get();
    }

    public function render()
    {

        return view('livewire.blog.comments',[
            'comments' => $this->comments
        ]);

    }
}
