<?php

namespace App\Mail;

use App\Models\Profiles;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     */
    public function __construct(Profiles $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.welcomeEmail')
            ->subject('Welcome to SocialMate')
            ->with([
                'fullname' => $this->user->full_name,
                'username' => $this->user->username,
            ]);
    }
}
