<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\EventFeatureInterface;
use App\Http\Requests\EventFeatureRequest;
use App\Models\Event;
use App\Models\EventFeature;
use Illuminate\Http\Request;

class EventFeatureController extends Controller
{
  
    private $EventFeatureInterface;

    public function __construct(EventFeatureInterface $EventFeatureInterface)
    {
        $this->EventFeatureInterface = $EventFeatureInterface;
    }
    public function index($eventId)
    {
        return $this->EventFeatureInterface->index($eventId);
    }

    public function create($eventId)
    {
        return $this->EventFeatureInterface->create($eventId);
    }

    public function store(EventFeatureRequest $request)
    {
        return $this->EventFeatureInterface->store($request);
    }


    public function edit($EventFeatureId)
    {
        return $this->EventFeatureInterface->edit($EventFeatureId);
      
    }
    public function update(EventFeatureRequest $request,  $EventFeatureId)
    {
        return $this->EventFeatureInterface->update($request , $EventFeatureId); 
    }
    public function delete($EventFeatureId)
    {
        return $this->EventFeatureInterface->delete($EventFeatureId);
    }
}
