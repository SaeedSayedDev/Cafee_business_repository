<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\ContactInterface;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
// use App\Models\Notification;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    private $ContactInterface;

    public function __construct(ContactInterface $ContactInterface)

    {
        $this->ContactInterface = $ContactInterface;
    }
    public function index()
    {
        return $this->ContactInterface->index();
    }

 
    public function store(ContactRequest $request)
    {
        return $this->ContactInterface->store($request);
    }


    public function show($chefId)
    {
        return $this->ContactInterface->show($chefId);
    }
   
    public function delete($chefId)
    {
        return $this->ContactInterface->delete($chefId);
    }
}
