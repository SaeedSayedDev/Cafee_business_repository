<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\EventInterface;
use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    //
    private $EventInterface;

    public function __construct(EventInterface $EventInterface)
    {
        $this->EventInterface = $EventInterface;
    }
    public function index()
    {
        return $this->EventInterface->index();
    }

    public function create()
    {
        return $this->EventInterface->create();
    }

    public function store(EventRequest $request)
    {
        return $this->EventInterface->store($request);
    }


    public function edit($EventFeatureId)
    {
        return $this->EventInterface->edit($EventFeatureId);
      
    }
    public function update(EventRequest $request,  $EventFeatureId)
    {
        return $this->EventInterface->update($request , $EventFeatureId); 
    }
    public function delete($EventFeatureId)
    {
        return $this->EventInterface->delete($EventFeatureId);
    }
}
