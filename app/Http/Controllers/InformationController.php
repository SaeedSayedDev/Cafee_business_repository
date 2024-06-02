<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\InformationInterface;
use App\Http\Requests\InformationRequest;
use App\Models\information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    private $InformationInterface;

    public function __construct(InformationInterface $InformationInterface)
    {
        $this->InformationInterface = $InformationInterface;
    }
    public function index()
    {
        return $this->InformationInterface->index();
    }

    public function create()
    {
        return $this->InformationInterface->create();
    }

    public function store(InformationRequest $request)
    {
        return $this->InformationInterface->store($request);
    }

 
    public function update(InformationRequest $request,  $imageId)
    {
        return $this->InformationInterface->update($request , $imageId); 
    }
    public function delete($imageId)
    {
        return $this->InformationInterface->delete($imageId);
    }
  
}
