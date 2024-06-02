<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\AboutInteface;
use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
   
    private $AboutIntefaces;
    public function __construct(AboutInteface $AboutIntefaces)
    {
        
        $this->AboutIntefaces = $AboutIntefaces;
    }

    public function index()
    {
        return $this->AboutIntefaces->index();
        
    }

    public function update(AboutRequest $request)
    {
        return $this->AboutIntefaces->update($request);
       
      
    }
}
