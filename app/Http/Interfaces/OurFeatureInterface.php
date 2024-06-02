<?php

namespace App\Http\Interfaces;


interface OurFeatureInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($ourFeatureId);
    public function update($request , $ourFeatureId);
    public function delete($ourFeatureId);
}