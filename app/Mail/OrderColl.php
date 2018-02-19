<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderColl extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $phone;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone)
    {
        $this->name=$name;
        $this->phone=$phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Заказано обратный звонок KAMILA')->markdown('emails.orderColl');
    }
}
