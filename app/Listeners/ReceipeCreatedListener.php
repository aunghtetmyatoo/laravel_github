<?php

namespace App\Listeners;

use App\Mail\ReceipeStored;
use App\Events\ReceipeCreatedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReceipeCreatedListener
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
     * @param  ReceipeCreatedEvent  $event
     * @return void
     */
    public function handle(ReceipeCreatedEvent $event)
    {
        // Mail::to('aunghtetmyatoo888@gmail.com')->send(new ReceipeStored($event->receipe));
    }
}
