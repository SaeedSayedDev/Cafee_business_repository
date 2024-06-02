<?php

namespace App\Http\Interfaces;


interface AdminInterface{
    public function index();
    public function create();
    public function edit($adminId);
    public function store($request);
    public function update($request , $adminId);
    public function delete($adminId);

    public function is_login($request);
    public function logout();

    
}