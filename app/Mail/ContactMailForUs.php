<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailForUs extends Mailable
{
    use Queueable, SerializesModels;

    private $title;
    private $msg;

    /**
     * Create a new message instance.
     * @param $title
     * @param $msg
     */
    public function __construct($title, $msg)
    {
        $this->title = $title;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contacto recibido de avoCode.com')
            ->view('emails.contact.contactForUs', [
                'title' => $this->title,
                'msg' => $this->msg
            ]);
    }
}
