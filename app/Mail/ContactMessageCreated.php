<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $p_name, $p_email, $p_msg )
    {
        $this->name= $p_name;
        $this->email = $p_email;
        $this->msg = $p_msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created');
    }
}
