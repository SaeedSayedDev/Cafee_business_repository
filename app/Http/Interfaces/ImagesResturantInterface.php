<?php

namespace App\Http\Interfaces;


interface ImagesResturantInterface{
    public function index();
    public function create();
    public function store($request);
    public function update($request , $imagesResturantId);
    public function delete($imagesResturantId);
}