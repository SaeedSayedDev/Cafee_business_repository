<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\OurFeatureInterface;
use App\Http\Requests\OurFeatureRequest;
use App\Models\OurFeature;
use Illuminate\Http\Request;

class OurFeatureController extends Controller
{
    private $OurFeatureInterface;

    public function __construct(OurFeatureInterface $OurFeatureInterface)
    {
        $this->OurFeatureInterface = $OurFeatureInterface;
    }
    public function index()
    {
        return $this->OurFeatureInterface->index();
    }

    public function create()
    {
        return $this->OurFeatureInterface->create();
    }

    public function store(OurFeatureRequest $request)
    {
        return $this->OurFeatureInterface->store($request);
    }


    public function edit($featureId)
    {
        return $this->OurFeatureInterface->edit($featureId);
      
    }
    public function update(OurFeatureRequest $request,  $featureId)
    {
        return $this->OurFeatureInterface->update($request , $featureId); 
    }
    public function delete($featureId)
    {
        return $this->OurFeatureInterface->delete($featureId);
    }
}
