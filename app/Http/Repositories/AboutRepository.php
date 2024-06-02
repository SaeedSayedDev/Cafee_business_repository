<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\AboutInteface;
use App\Models\About;
use Illuminate\Support\Facades\File;


class AboutRepository implements AboutInteface
{
    private $aboutModel;
    public function __construct(About $aboutModel)
    {
        $this->aboutModel = $aboutModel;
    }

    public function index()
    {
        $about = $this->aboutModel::first();
        return view('aPanal/About/aboutView', ['data' => $about]);
    }

    public function update($request)
    {

        $updateAbout = $this->aboutModel->first();
     

        if ($updateAbout) {

            $path = 'images/about/';
            $oldeImage = public_path($path) . $updateAbout->image;

            $data =request()->all();         

            if ($request->hasFile('image')) {
                $fileName = '_About' . time() . '.' . $request['image']->extension();
                $request->image->move(public_path($path), $fileName);
                $data['image'] = $fileName;

                $updateAbout->update($data);

                if (File::exists($oldeImage)) {
                    unlink($oldeImage);
                }
            } else {
                $updateAbout->update($data);
            }

            session()->flash('update_success', 'Update About Done');
            return redirect()->back();
        }
    }
}
