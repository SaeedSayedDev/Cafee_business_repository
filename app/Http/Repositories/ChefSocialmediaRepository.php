<?php

namespace App\Http\Repositories;


use App\Http\Interfaces\ChefSocialmediaInteface;
use App\Models\Chef;
use App\Models\ChefSocialmedia;

class ChefSocialmediaRepository implements ChefSocialmediaInteface
{
    private $socialModel;
    private $chefModel;
    public function __construct(ChefSocialmedia $social, Chef $chef)
    {
        $this->socialModel = $social;
        $this->chefModel = $chef;
    }
    public function index($chefId)
    {
        $check_chef_id = $this->socialModel->select('id', 'facebook', 'instagram', 'twitter' , 'tiktok', 'chef_id')
            ->WHERE('chef_id', '=', $chefId)
            ->get();
        if ($check_chef_id->count() > 0) {
            // dd("said");

            return view('/aPanal/Chef/viewSocial', [
                'chef_id' => $chefId,
                'socials' => $check_chef_id,
            ]);
        } else {
            return view('aPanal/Chef/addSocial', ["chef_id" => $chefId , "social"=>$check_chef_id]);
        }
    }

    public function create($chefId)
    {
        return view('aPanal/Chef/addSocial', ["chef_id" => $chefId]);
    }
    public function store($request)
    {
        $data = request()->all();

        $this->socialModel->create($data);
        session()->flash('Add_success', 'Add Chef Feature Done');
        return redirect()->back();
    }
    public function edit($chefId)
    {
        $check_chef_id = $this->socialModel->select('id','facebook', 'instagram', 'twitter' , 'tiktok',  'chef_id')
            ->WHERE('chef_id', '=', $chefId)
            ->get();
        return view('/aPanal/Chef/viewSocial', [
            'chef_id' => $chefId,
            'socials' => $check_chef_id,
        ]);
    }
    public function update($request, $socialId)
    {
        $data = request()->all();

        // dd($socialId);
        $data['social_id'] = $socialId;
        $this->socialModel->find($socialId)->update($data);
        session()->flash('Update_success', 'Update Chef Feature  Done');

        return redirect()->back();
    }
    public function delete($socialId)
    {
        $this->socialModel->find($socialId)->delete();
        return redirect()->back();
    }
}