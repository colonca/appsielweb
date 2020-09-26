<?php

namespace App\Http\Livewire\Backoffice;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public $urls = [];
    public $title;
    public $description;

    public function mount($title, $urls, $description) {
        $this->urls = $urls;
        $this->title = $title;
        $this->description = $description;
    }


    public function render() {
        return view('livewire.backoffice.breadcrumbs');
    }
}
