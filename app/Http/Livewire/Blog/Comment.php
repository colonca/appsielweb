<?php

namespace App\Http\Livewire\Blog;

use App\Models\Comment as Comments;

use Livewire\Component;


class Comment extends Component
{

    public $post;
    public $comment;
    public $message;
    public $name = '';
    public $email = '';
    public $body = '';

    public function  mount($post,$message,$comment=0){
        $this->post = $post->id;
        $this->comment = $comment;
        $this->message = $message;
    }

    public function postComment(){

        $this->validate([
           'name' => 'required',
           'email' => 'required|email',
           'body' => 'required'
        ]);

        $comment = new Comments([
            'name' => $this->name,
            'email' => $this->email,
            'body' => $this->body,
            'comment_id' => $this->comment,
            'post_id' => $this->post
        ]);

        $comment->save();

        $this->name = '';
        $this->email = '';
        $this->body = '';

        $this->emitUp('newComment');

    }

    public function render()
    {
        return view('livewire.blog.comment');
    }

}
