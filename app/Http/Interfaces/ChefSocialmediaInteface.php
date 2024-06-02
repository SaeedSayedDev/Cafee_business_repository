<?php

namespace App\Http\Interfaces;


interface ChefSocialmediaInteface{
    public function index($chefId);
    public function create($chefId);
    public function store($request);
    public function edit($chefSocialmediaId);
    public function update($request , $chefSocialmediaId);
    public function delete($chefSocialmediaId);
}