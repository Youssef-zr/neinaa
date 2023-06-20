<?php

namespace App\Listeners;

use App\Events\SendMessageEvent;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;

class SendMessageListner
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
     * @param  object  $event
     * @return void
     */
    public function handle(SendMessageEvent $event)
    {
        $this->sendMessage($event->contact);
    }

    public function sendMessage($contact)
    {
        Mail::to('yn-neinaa@hotmail.com')
            ->send(new ContactMessage($contact));
    }
}
