<?php

namespace App\Listeners;

use App\Events\PostCreatedEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\PostCreationNotification;

class PostCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostCreatedEvent $event): void
    {
        $user = auth()->user();
        $user->notify(new PostCreationNotification($event->post));
    }
}
