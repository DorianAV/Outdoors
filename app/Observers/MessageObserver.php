<?php

namespace App\Observers;

use App\Mail\MessageMail;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
class MessageObserver
{
    /**
     * Handle the Message "created" event.
     */
    public function created(Message $message): void
    {
        //poner despues sales@conroeoutdoorconstruction.com
        Mail::to('destinatario@example.com')->send(new MessageMail($message->question,$message->name,$message->email,$message->subject, ));
    }

    /**
     * Handle the Message "updated" event.
     */
    public function updated(Message $message): void
    {
        //
    }

    /**
     * Handle the Message "deleted" event.
     */
    public function deleted(Message $message): void
    {
        //
    }

    /**
     * Handle the Message "restored" event.
     */
    public function restored(Message $message): void
    {
        //
    }

    /**
     * Handle the Message "force deleted" event.
     */
    public function forceDeleted(Message $message): void
    {
        //
    }
}
