<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\MenuItemInterface;
use App\Http\Requests\MenuItemRequest;
use App\Models\MenuCategory;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    private $MenuItemInterface;
    public function __construct( MenuItemInterface $MenuItemInterface){
        $this->MenuItemInterface = $MenuItemInterface;
    }


    public function index(){
       return  $this->MenuItemInterface->index();
    
    }

    
    public function create(){
       return  $this->MenuItemInterface->create();
    }


    public function store(MenuItemRequest $request){
       
        return  $this->MenuItemInterface->store($request);
       
    }


    public function edit($itemId , $categoryId){
        return  $this->MenuItemInterface->edit($itemId , $categoryId);
      
    }


    public function update(MenuItemRequest $request , $itemId){
     

        return  $this->MenuItemInterface->update($request , $itemId);

    }


    public function delete($itemId){
        return  $this->MenuItemInterface->delete( $itemId);

    }
       
}
