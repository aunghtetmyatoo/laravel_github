<?php

namespace App\Events;

use App\Receipe;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ReceipeCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $receipe;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Receipe $receipe)
    {
        $this->receipe = $receipe;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
