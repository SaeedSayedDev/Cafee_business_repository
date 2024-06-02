<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\TableInterface;
use App\Http\Requests\TableRequest;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    private $TableInterface;

    public function __construct(TableInterface $TableInterface)
    {
        $this->TableInterface = $TableInterface;
    }
    public function index()
    {
        return $this->TableInterface->index();
    }

    public function create()
    {
        return $this->TableInterface->create();
    }

    public function store(TableRequest $request)
    {
        return $this->TableInterface->store($request);
    }

    public function edit($tableId)
    {
        return $this->TableInterface->edit($tableId);
    }

    public function update(TableRequest $request,  $tableId)
    {
        return $this->TableInterface->update($request , $tableId); 
    }

    public function delete($tableId)
    {
        return $this->TableInterface->delete($tableId);
    }
}
