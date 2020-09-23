<?php

namespace App\Http\Livewire\Backoffice\Categories;

use App\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = ['categoriesUpdated'];

    public function render()
    {
        $categories = Category::paginate(10);
        return view('livewire.backoffice.categories.index',[
            'categories' => $categories
        ]);
    }

    public function categoriesUpdated(){
        // Self::render(); NO ELIMINAR
    }

    public function edit($id) {
        $category = Category::find($id);
        $this->emit('categoryEdit',$category);
    }

    public function delete($id){
        $category = Category::find($id);
        if(count($category->posts) > 0){
            $this->emit('message', [
                'body' => 'La categoría <strong>' . $category->name . '</strong> no se puede eliminar porque tiene post asociados.',
                'type' => 'warning'
            ]);
        }
        $result = $category->delete();
        if($result){
            $this->emit('message', [
                'body' => 'La categoría <strong>' . $category->name . '</strong> fue eliminada correctamente.',
                'type' => 'success'
            ]);
        }else{
            $this->emit('message', [
                'body' => 'La categoría <strong>' . $category->name . '</strong> no fue eliminada correctamente.',
                'type' => 'danger'
            ]);
        }
    }
}
