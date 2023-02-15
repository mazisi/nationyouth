<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationMail extends Mailable
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
    public function build(){

        $location = 'storage/app/public/'.$this->user->cv;
        
        return $this->from($this->user['email'])
        ->markdown('template.client.applicationform')
         ->attach($location)
        ->with([
            'message' => $this->user['message'],
            'email' => $this->user['email'],
            'position' => $this->user['position'],
            'full_name' => $this->user['full_name'],
             'cv' => $this->user['cv']
        ]);

      
    }
}
