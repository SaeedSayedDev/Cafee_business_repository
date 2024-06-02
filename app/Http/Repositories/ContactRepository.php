<?php

namespace App\Http\Repositories;


use App\Http\Interfaces\ChefSocialmediaInteface;
use App\Http\Interfaces\ContactInterface;
use App\Models\Chef;
use App\Models\ChefSocialmedia;
use App\Models\Contact;

class ContactRepository implements ContactInterface
{
    private $contactModel;
    public function __construct(Contact $contact)
    {
        $this->contactModel = $contact;
    }

    public function index()
    {
        $all_messages = $this->contactModel->all();
        return view('aPanal/Contact/viewAllMessage', ['messages' => $all_messages]);
    }
    public function store($request)
    {
        $data = request()->all();
        $data['is_reading'] = "not_reading";
        // return "said";
        $this->contactModel->create($data);

        return redirect()->back();
    }
    public function show($messageId)
    {
        $message = $this->contactModel->find($messageId);
        if ($message->is_reading == 'not_reading') {
            $message->update([
                'is_reading' => 'reading'
            ]);
        }
        return view('aPanal/Contact/viewMessage', ['message' => $message]);
    }
    public function delete($messageId)
    {
        $this->contactModel->find($messageId)->delete();
        return back();
    }
}
