<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\NotificationInterface;
use App\Models\Notification;
use Illuminate\Support\Facades\File;


class NotificationRepository implements NotificationInterface
{
    public function index()
    {
        $notification = Notification::get();
        return view('aPanal/_Layout' ,['notification' => $notification]);
        // event(new message($notification));
        // return view('testNotification', ['notification' => $notification->number]);
    }
}