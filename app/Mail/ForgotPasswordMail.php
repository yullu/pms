<?php
namespace App\Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
class ForgotPasswordMail extends Mailable

public $user;
public function __construct($user)
{
    $this->user = $user;
}
public function build()
{
    return $this->markdown('emails.forgot_password');
}
