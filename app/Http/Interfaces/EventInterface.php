<?php

namespace App\Http\Interfaces;


interface EventInterface{
    public function index();
    public function create();
    public function store($request);
    public function edit($eventId);
    public function update($request , $eventId);
    public function delete($eventId);
}