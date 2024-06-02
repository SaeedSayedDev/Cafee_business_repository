<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\AboutFeatureInterface;
use App\Http\Requests\AboutFeatureRequest;
use Illuminate\Http\Request;

class AboutFeatureController extends Controller
{
    private $AboutFeatureInterface;

    public function __construct(AboutFeatureInterface $AboutFeatureInterface)
    {
        $this->AboutFeatureInterface = $AboutFeatureInterface;
    }
    public function index()
    {
        return $this->AboutFeatureInterface->index();
    }


    public function store(AboutFeatureRequest $request)
    {
        return $this->AboutFeatureInterface->store($request);
    }


    public function edit($featureId)
    {
        return $this->AboutFeatureInterface->edit($featureId);
      
    }
    public function update(AboutFeatureRequest $request,  $featureId)
    {
        return $this->AboutFeatureInterface->update($request , $featureId); 
    }
    public function delete($featureId)
    {
        return $this->AboutFeatureInterface->delete($featureId);

       
    }
}
