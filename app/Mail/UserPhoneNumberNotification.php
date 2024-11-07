<?php

// app/Mail/UserPhoneNumberNotification.php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserPhoneNumberNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $phoneNumber;
    public $name;

    /**
     * Create a new message instance.
     *
     * @param string $phoneNumber
     * @param string $name
     * @return void
     */
    public function __construct($phoneNumber, $name)
    {
        $this->phoneNumber = $phoneNumber;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = config('mail.to');
        return $this->from('sgovietnam.dev@gmail.com')
            ->to($email)
            ->subject('Gửi số điện thoại mới')
            ->view('emails.user_phone_notification');
    }
}
