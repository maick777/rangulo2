<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mail_hogar extends Mailable //implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subject;
    public $msg;
    public $para;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $para)
    {
        $this->msg = $message;
        $this->subject = 'Cotización de Seguro Hogar - ' . $message['nombres'];
        $this->para = $para;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('hogar.mail');
    }


}
