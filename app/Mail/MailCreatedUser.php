<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailCreatedUser extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('msesh@gmail.com')
        ->markdown('template.client.mailUserCredentials')
        ->with([
            'email' => $this->user['email'],
            'first_name' => $this->user['first_name'],
            'last_name' => $this->user['last_name'],
            'password' => $this->user['password'],
            
        ]);
    }
}
