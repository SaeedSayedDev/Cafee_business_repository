<?php

namespace App\Http\Interfaces;


interface DishSpecialInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($dishSpecialId);
    public function update($request , $dishSpecialId);
    public function delete($dishSpecialId);
}