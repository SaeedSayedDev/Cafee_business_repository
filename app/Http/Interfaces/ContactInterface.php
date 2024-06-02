<?php

namespace App\Http\Interfaces;


interface ContactInterface{
    public function index();
    public function store($request);
    public function show($contactId);
    public function delete($contactId);
}