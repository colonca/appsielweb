<?php

namespace App\Http\Livewire\Backoffice\Categories;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Boolean;

class CreateOrUpdate extends Component
{
    public $name;
    public $description;
    public $edit = false;
    public $category_id;

    protected $listeners = ['categoryEdit'];

    public function render() {
        return view('livewire.backoffice.categories.create-or-update');
    }

    public function save() {
        $this->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $result = $this->newOrEditCategory();
        if ($result) {
            $this->emitUp('categoriesUpdated');
            $this->emit('message', [
                'body' => 'La categoría <strong>' . $this->name . '</strong> fue almacenada correctamente.',
                'type' => 'success'
            ]);
        } else {
            $this->emit('message', [
                'body' => 'La categoría <strong>' . $this->name . '</strong> no fue almacenada. Error: ' . $result,
                'type' => 'danger'
            ]);
        }
        $this->name = '';
        $this->description = '';
        $this->category_id = '';
        $this->edit = false;
    }

    public function categoryEdit($category) {
        $this->name = $category['name'];
        $this->description = $category['body'];
        $this->category_id = $category['id'];
        $this->edit = true;
    }

    private function newOrEditCategory(){
        $category = $this->edit ? Category::findOrFail($this->category_id) : new Category();
        $category->name = strtoupper($this->name);
        $category->body = strtoupper($this->description);
        $category->slug = Str::slug($this->name, '-');
        $result = $category->save();
        return $result;
    }

    public function limpiar(){
        $this->name = '';
        $this->description = '';
        $this->category_id = '';
        $this->edit = false;
    }

}
