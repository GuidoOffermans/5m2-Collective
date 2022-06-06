<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignedUpForStudio extends Mailable implements ShouldQueue {
    use Queueable, SerializesModels;

    public string $studioName;
    public string $name;
    public string $email;
    public string $phone;
    public string $language;
    public string $skills;
    public string $dates;
    public string $comments;


    public function __construct(
        string $studioName,
        string $name,
        string $email,
        string $phone,
        string $language,
        string $skills,
        string $dates,
        string $comments ) {
        $this->studioName = $studioName;
        $this->name       = $name;
        $this->email      = $email;
        $this->phone      = $phone;
        $this->language   = $language;
        $this->skills     = $skills;
        $this->dates      = $dates;
        $this->comments   = $comments;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this
            ->subject( $this->name . 'signed up for studio:' . $this->studioName )
            ->view( 'emails.signedUpforStudio' );
    }
}
