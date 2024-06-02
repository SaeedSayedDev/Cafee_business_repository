<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\MenuCategoryIntefaces;
use App\Http\Requests\MenuCategoryRequest;


class MenuCategoryController extends Controller
{
    private $MenuCategoryIntefaces;
    public function __construct(MenuCategoryIntefaces $MenuCategoryIntefaces)
    {
        $this->MenuCategoryIntefaces = $MenuCategoryIntefaces;
    }


    public function create()
    {
        return  $this->MenuCategoryIntefaces->create();
    }

    public function store(MenuCategoryRequest $request)
    {
        return  $this->MenuCategoryIntefaces->store($request);
    }


    public function update(MenuCategoryRequest $request, $categoryId)
    {
        return  $this->MenuCategoryIntefaces->update($request, $categoryId);
    }

    public function delete($categoryId)
    {
        return  $this->MenuCategoryIntefaces->delete($categoryId);
    }
}
