<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\ImagesResturantInterface;
use App\Http\Requests\ImagesResturantRequest;
use App\Models\ImagesResturant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImagesResturantController extends Controller
{
    private $ImagesResturantInterface;

    public function __construct(ImagesResturantInterface $ImagesResturantInterface)
    {
        $this->ImagesResturantInterface = $ImagesResturantInterface;
    }
    public function index()
    {
        return $this->ImagesResturantInterface->index();
    }

    public function create()
    {
        return $this->ImagesResturantInterface->create();
    }

    public function store(ImagesResturantRequest $request)
    {
        return $this->ImagesResturantInterface->store($request);
    }

 
    public function update(ImagesResturantRequest $request,  $imageId)
    {
        return $this->ImagesResturantInterface->update($request , $imageId); 
    }
    public function delete($imageId)
    {
        return $this->ImagesResturantInterface->delete($imageId);
    }
  
}
