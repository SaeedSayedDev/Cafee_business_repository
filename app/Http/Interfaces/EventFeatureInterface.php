<?php

namespace App\Http\Interfaces;


interface EventFeatureInterface{
    public function index();
    public function create($eventId);
    public function store($request);
    public function edit($eventFeatureInterfaceId);
    public function update($request , $eventFeatureInterfaceId);
    public function delete($eventFeatureInterfaceId);
}