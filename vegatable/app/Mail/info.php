<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class info extends Mailable
{
    use Queueable, SerializesModels;
 public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($d)
    {
        
        $this->data= $d;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.info');
    }
}
