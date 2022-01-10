<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class meetingInvitation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mt;
    public $customer;
    public function __construct($data, $customerData)
    {
        $this -> mt = $data;
        $this -> customer = $customerData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.meeting-invite', [
            'mt' => $this->mt,
            'customer' => $this->customer,
            ]);
    }
}
