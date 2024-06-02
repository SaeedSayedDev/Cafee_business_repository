<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\TableInterface;
use App\Models\Table;


class TableRepository implements TableInterface
{
    public function index()
    {
        $tables = Table::get();
        return view('aPanal/Table/tablesView', compact('tables'));
    }
    public function create()
    {
        return view('aPanal/Table/tablesAdd');
    }
    public function store($request)
    {
        $data = request()->all();

        Table::create($data);
        return back();
    }
    public function edit($id)
    {
        $table = Table::find($id);
        return view('aPanal/Table/tablesEdit', compact('table'));
    }
    public function update( $request, $id)
    {
        $data = request()->all();
        Table::find($id)->update($data);
        return back();
    }
    public function delete($id)
    {
        Table::find($id)->delete();
        return back();
    }
}
