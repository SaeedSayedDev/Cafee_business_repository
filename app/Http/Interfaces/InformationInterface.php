<?php

namespace App\Http\Interfaces;


interface InformationInterface{
    public function index();
    public function create();
    public function store($request);
    public function update($request , $informationId);
    public function delete($informationId);
}