<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\AdminInterface;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    private $AdminInterface;

    public function __construct(AdminInterface $AdminInterface)
    {
        $this->AdminInterface = $AdminInterface;
    }
    public function index()
    {
        return $this->AdminInterface->index();
    }

    public function create()
    {
        return $this->AdminInterface->create();
    }

    public function store(AdminRequest $request)
    {
        return $this->AdminInterface->store($request);
    }


    public function edit($adminId)
    {
        return $this->AdminInterface->edit($adminId);
      
    }
    public function update(AdminRequest $request,  $adminId)
    {
        return $this->AdminInterface->update($request , $adminId); 
    }
    public function delete($adminId)
    {
        return $this->AdminInterface->delete($adminId);
    }

    public function is_login(Request $request)
    {
        return $this->AdminInterface->is_login($request); 
    }
    public function logout()
    {
        return $this->AdminInterface->logout();
    }
}
