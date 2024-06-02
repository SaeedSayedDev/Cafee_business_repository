<?php

namespace App\Http\Interfaces;


interface TableInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($tableId);
    public function update($request , $tableId);
    public function delete($tableId);
}