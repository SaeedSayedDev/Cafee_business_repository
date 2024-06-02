<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\ChefInterface;
use App\Http\Requests\ChefRequest;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ChefController extends Controller
{
    private $ChefInterface;

    public function __construct(ChefInterface $ChefInterface)
    {
        $this->ChefInterface = $ChefInterface;
    }
    public function index()
    {
        return $this->ChefInterface->index();
    }

    public function create()
    {
        return $this->ChefInterface->create();
    }

    public function store(ChefRequest $request)
    {
        return $this->ChefInterface->store($request);
    }


    public function edit($chefId)
    {
        return $this->ChefInterface->edit($chefId);
      
    }
    public function update(ChefRequest $request,  $chefId)
    {
        return $this->ChefInterface->update($request , $chefId); 
    }
    public function delete($chefId)
    {
        return $this->ChefInterface->delete($chefId);
    }
}
