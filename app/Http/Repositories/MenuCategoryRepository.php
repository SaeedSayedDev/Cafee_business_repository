<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\MenuCategoryIntefaces;
use App\Models\MenuCategory;

class MenuCategoryRepository implements MenuCategoryIntefaces
{
    private $categoryModel;
    public function __construct(MenuCategory $menuCategory ){
        $this->categoryModel = $menuCategory;
    }

    public function create()
    {
        $all_category = $this->categoryModel->all();
        return view('/aPanal/Menu/add_view_category' , ['categories' => $all_category]);
    }


    public function store($request)
    {
        $this->categoryModel->create($request->all());
        session()->flash('Add_success', 'Add Category Done');
        return redirect()->back();
    }


    public function update($request, $categoryId)
    {
        // dd($categoryId);
        
        $this->categoryModel->findOrFail($categoryId)->update($request->all());
        session()->flash('Update_success', 'Update Category Done');

        return redirect()->back();
    }


    public function delete($categoryId)
    {
        $this->categoryModel->find($categoryId)->delete();
        session()->flash('Deleted_success', 'Delete Category Done');
        
        return redirect()->back();
    }
}
