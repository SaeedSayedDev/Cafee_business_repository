<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\ChefSocialmediaInteface;
use App\Http\Requests\ChefSocialmediaRequest;
use App\Models\Chef;
use App\Models\ChefSocialmedia;
use Illuminate\Http\Request;

class ChefSocialmediaController extends Controller
{
    private $ChefSocialmediaInteface;

    public function __construct(ChefSocialmediaInteface $ChefSocialmediaInteface)
    {
        $this->ChefSocialmediaInteface = $ChefSocialmediaInteface;
    }
    public function index($chefId)
    {
        return $this->ChefSocialmediaInteface->index($chefId);
    }

    public function create($chefId)
    {
        return $this->ChefSocialmediaInteface->create($chefId);
    }

    public function store(ChefSocialmediaRequest $request)
    {
        return $this->ChefSocialmediaInteface->store($request);
    }


    public function edit($chefId)
    {
        return $this->ChefSocialmediaInteface->edit($chefId);
      
    }
    public function update(ChefSocialmediaRequest $request,  $chefId)
    {
        return $this->ChefSocialmediaInteface->update($request , $chefId); 
    }
    public function delete($chefId)
    {
        return $this->ChefSocialmediaInteface->delete($chefId);
    }
}
