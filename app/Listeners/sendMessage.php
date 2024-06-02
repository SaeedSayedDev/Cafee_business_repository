<?php

namespace App\Listeners;

use App\Events\message;
use App\Events\PodcastProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendMessage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\PodcastProcessed  $event
     * @return void
     */
    public function handle(message $event)
    {
        $this->updateNotifications($event->notificationModel);
    }
    public function updateNotifications($notificationModel)
    {
        $notificationModel->number += 1;
        $notificationModel->save();
    }
}
