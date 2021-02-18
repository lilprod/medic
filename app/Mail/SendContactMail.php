<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    public $firstname;
    public $email;
    public $phone;
    public $subject;
    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $firstname, $email, $phone, $subject, $message)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_email = $this->email;
        $e_subject = $this->subject;
        $e_message = $this->message;
        $e_name = $this->name; 
        $e_firstname = $this->firstname; 
        $e_phone = $this->phone; 

        return $this->from($e_email)->subject($e_subject)->view('mail.contact_mail', compact('e_message','e_name', 'e_firstname', 'e_phone'));
    }
}

