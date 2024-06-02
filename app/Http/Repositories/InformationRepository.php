<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\InformationInterface;
use App\Models\information;
use Illuminate\Support\Facades\File;


class InformationRepository implements InformationInterface
{
    private $informationModel;
    public function __construct(information $information)
    {
        $this->informationModel = $information;
    }
    public function index()
    {
        $all_information = $this->informationModel->all();
        return view('aPanal/Information/viewInformation', ['informations' => $all_information]);
    }
    public function create()
    {
        return view('aPanal/Information/addInformation');
    }
    public function store($request)
    {
        $data = request()->all();

        $this->informationModel->create($data);
        session()->flash('Add_success', 'Add Information Done');

        return redirect()->back();
    }
    public function update($request, $informationId)
    {
        $data = request()->all();

        $this->informationModel->find($informationId)->update($data);
        session()->flash('Update_success', 'Update Information Done');
        return redirect()->back();
    }
    public function delete($informationId)
    {
        $this->informationModel->find($informationId)->delete();
        return redirect()->back();
    }
}
