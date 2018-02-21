<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactPageUser extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name=$name;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('ОБРАТНАЯ СВЯЗЬ KAMILA')->markdown('emails.contactPageUser');
    }
}
