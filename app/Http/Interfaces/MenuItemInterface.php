<?php

namespace App\Http\Interfaces;

interface MenuItemInterface
{
    public function index();
    public function create();
    public function store($request);
    public function edit($itemId , $categoryId);
    public function update($request , $itemId);
    public function delete($itemId);
}
