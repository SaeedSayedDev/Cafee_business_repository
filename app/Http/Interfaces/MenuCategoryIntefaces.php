<?php

namespace App\Http\Interfaces;

interface MenuCategoryIntefaces {
    public function create();
    public function store($request);
    public function update($request , $categoryId);
    public function delete($categoryId);
}