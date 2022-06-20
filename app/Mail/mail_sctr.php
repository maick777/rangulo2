<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class mail_sctr extends Mailable
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
        $this->subject = 'Cotización de Seguro SCTR - ' . strtoupper($message['razon_social']);
        $this->para = $para;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('sctr.mail');
    }
}
