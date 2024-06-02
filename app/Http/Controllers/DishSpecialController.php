<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\DishSpecialInterface;
use App\Http\Requests\DishSpecialRequest;
use App\Models\DishSpecial;
use Illuminate\Http\Request;

class DishSpecialController extends Controller
{
    private $DishSpecialInterface;

    public function __construct(DishSpecialInterface $DishSpecialInterface)
    {
        $this->DishSpecialInterface = $DishSpecialInterface;
    }
    public function index()
    {
        return $this->DishSpecialInterface->index();
    }

    public function create()
    {
        return $this->DishSpecialInterface->create();
    }

    public function store(DishSpecialRequest $request)
    {
        return $this->DishSpecialInterface->store($request);
    }


    public function edit($chefId)
    {
        return $this->DishSpecialInterface->edit($chefId);
      
    }
    public function update(DishSpecialRequest $request,  $chefId)
    {
        return $this->DishSpecialInterface->update($request , $chefId); 
    }
    public function delete($chefId)
    {
        return $this->DishSpecialInterface->delete($chefId);
    }
}
