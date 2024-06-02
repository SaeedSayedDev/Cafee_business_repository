<?php

namespace App\Http\Interfaces;


interface AboutFeatureInterface{
    public function index();
    public function store($request);
    public function edit($AboutFeatureId);
    public function update($request , $AboutFeatureId);
    public function delete($AboutFeatureId);
}