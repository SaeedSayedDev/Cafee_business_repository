<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\OurFeatureInterface;
use App\Models\OurFeature;
use Illuminate\Support\Facades\File;


class OurFeatureRepository implements OurFeatureInterface
{
    private $featureModel;
    public function __construct(OurFeature $feature)
    {

        $this->featureModel = $feature;
    }
    public function index()
    {
        $all_feature = $this->featureModel->all();
        // dd($all_feature);
        return view('/aPanal/Our_Feature/featuresView', ['features' => $all_feature]);
    }
    public function create()
    {
        return view('/aPanal/Our_Feature/featureAdd');
    }
    public function store($request)
    {
        $data = request()->all();


        $this->featureModel->create($data);
        session()->flash('Add_success', 'Add Feature Done');

        return redirect()->back();
    }
  
    public function edit($featureId)
    {
        $feature = $this->featureModel->find($featureId);
        // dd($feature);
        return view('/aPanal/Our_Feature/featureEdit', [
            'feature' => $feature
        ]);
    }
    public function update($request, $featureId)
    {
        $data = request()->all();

        $this->featureModel->find($featureId)->update($data);
        session()->flash('Update_success', 'Update Feature Done');

        return redirect()->back();
    }
    public function delete($featureId)
    {
        $this->featureModel->find($featureId)->delete();
        return redirect()->back();
    }
}
