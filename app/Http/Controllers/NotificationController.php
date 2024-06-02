<?php

namespace App\Http\Controllers;

use App\Events\message;
use App\Http\Interfaces\NotificationInterface;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class NotificationController extends Controller
{
    private $NotificationInterface;

    public function __construct(NotificationInterface $NotificationInterface)
    {
        $this->NotificationInterface = $NotificationInterface;
    }
    public function index()
    {
        return $this->NotificationInterface->index();
    }
}
