<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ShareAStudio extends Mailable implements ShouldQueue {
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $phone;
    public string $studioName;
    public string $studioAddress;
    public string $studioAbout;
    public string $studioExtra;
    public string $studioKey;
    public string $contactName;
    public string $contactEmail;
    public string $contactPhone;


    public function __construct(
        string $name,
        string $email,
        string $phone,
        string $studioName,
        string $studioAddress,
        string $studioAbout,
        string $studioExtra,
        string $studioKey,
        string $contactName,
        string $contactEmail,
        string $contactPhone
    ) {
        $this->name          = $name;
        $this->email         = $email;
        $this->phone         = $phone;
        $this->studioName    = $studioName;
        $this->studioAddress = $studioAddress;
        $this->studioAbout   = $studioAbout;
        $this->studioExtra   = $studioExtra;
        $this->studioKey     = $studioKey;
        $this->contactName   = $contactName;
        $this->contactEmail  = $contactEmail;
        $this->contactPhone  = $contactPhone;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->subject( $this->name . 'wants to share studio:' . $this->studioName )
            ->view( 'emails.shareAStudio' );
    }
}
