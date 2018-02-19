<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class callbackModal extends Mailable
{
    
    use Queueable, SerializesModels;
    public $name;
    public $phone;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $email)
    {
        $this->name=$name;
        $this->phone=$phone;
        $this->email=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('АНКЕТА KAMILA')->markdown('emails.calback-modal');
    }
}
