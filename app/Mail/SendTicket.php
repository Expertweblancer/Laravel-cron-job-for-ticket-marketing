<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendTicket extends Mailable
{
    use Queueable, SerializesModels;
    // public $count;
    // public $count;
    public $data;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // $this->count = $count;
        $this->data = $data;

        
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         
        // return $this->view('view.name');
        return $this->view('emails.ticketcount');
    }
}
