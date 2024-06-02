<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\AboutFeatureInterface;
use App\Models\AboutFeature;

class AboutFeatureRepository implements AboutFeatureInterface
{

    private $aboutFeatureModel;

    public function __construct(AboutFeature $aboutFeature)
    {
        $this->aboutFeatureModel = $aboutFeature;
    }

    public function index()
    {
        $all_feature = $this->aboutFeatureModel->all();
        return view('/aPanal/About/featuresView', ["features" => $all_feature]);
    }

    public function store($request)
    {
        $this->aboutFeatureModel->create(request()->all());
        session()->flash('add_success', 'Add Feature Done');
        return redirect()->back();
    }

    public function edit($aboutFeatureId)
    {
        $feature = $this->aboutFeatureModel->find($aboutFeatureId);
        return view('/aPanal/About/featureEdit', ['feature' => $feature]);
    }

    public function update($request, $aboutFeatureId)
    {
        $this->aboutFeatureModel->find($aboutFeatureId)->update(request()->all());
        session()->flash('update_success', 'Update Feature Done');

        return redirect()->back();
    }

    public function delete($aboutFeatureId)
    {
        $this->aboutFeatureModel->find($aboutFeatureId)->delete();
        return redirect()->back();
    }
}
