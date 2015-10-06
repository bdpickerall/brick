<?php

namespace App\Listeners;

use App\Events\InteractionWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InteractionMailer
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
     * @param  InteractionWasReceived  $event
     * @return void
     */
    public function handle(InteractionWasReceived $event)
    {
        //
    }
}
