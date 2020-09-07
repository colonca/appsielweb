<?php

namespace App\Http\Livewire;

use App\Post;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResult = [];

        if(strlen($this->search) >= 2){
            $searchResult = Post::where('name','like',"%$this->search%")->get()->take(7);
        }

        return view('livewire.search-dropdown',[
            'searchResult' => collect($searchResult),
        ]);
    }
}
