<?php

namespace App\Events;

use App\Product;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SpecialOffer
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $ProductName;
    public $Message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($Message)
    {
//        $this->ProductName = ;
        $this->Message  = $Message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        eturn ['special-offers'];
    }
}
