<?php

namespace App\Http\Interfaces;


interface ChefInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($chefId);
    public function update($request , $chefId);
    public function delete($chefId);
}