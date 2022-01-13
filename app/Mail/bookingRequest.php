<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class bookingRequest extends Mailable
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
        return $this->subject('New booking Request')->view('emails.booking-request', [
            'mt' => $this->mt,
            'customer' => $this->customer,
            ]);
    }
}
