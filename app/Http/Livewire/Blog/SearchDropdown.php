<?php

namespace App\Http\Livewire\Blog;

use App\Models\Post;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResult = [];

        if(strlen($this->search) >= 2){
            $searchResult = Post::where('name','like',"%$this->search%")->get();
        }

        return view('livewire.blog.search-dropdown',[
            'searchResult' => collect($searchResult)->take(7),
        ]);
    }
}
