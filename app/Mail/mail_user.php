<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mail_user extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'BIENVENIDO(A) AL SISTEMA COTIZADOR DE R. ANGULO';
    public $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->msg = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('users.mail');
    }
}
