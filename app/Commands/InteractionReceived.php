<?php

namespace App\Commands;

use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class InteractionReceived extends Command
{
    /**
     * Create a new command instance.
     * @param $email
     *
     */
    public function __construct($email)
    {
        //
        $this->email = $email;
    }

}
