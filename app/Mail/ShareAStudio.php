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
    public string $language;
    public string $studioName;
    public string $studioAddress;
    public string $studioAbout;
    public string $studioExtra;
    public string $studioInfra;
    public string $studioKey;
    public string $contactName;
    public string $contactPhone;


    public function __construct(
        string $name,
        string $email,
        string $phone,
        string $language,
        string $studioName,
        string $studioAddress,
        string $studioAbout,
        string $studioExtra,
        string $studioInfra,
        string $studioKey,
        string $contactName,
        string $contactPhone
    ) {
        $this->name          = $name;
        $this->email         = $email;
        $this->phone         = $phone;
        $this->language      = $language;
        $this->studioName    = $studioName;
        $this->studioAddress = $studioAddress;
        $this->studioAbout   = $studioAbout;
        $this->studioExtra   = $studioExtra;
        $this->studioInfra   = $studioInfra;
        $this->studioKey     = $studioKey;
        $this->contactName   = $contactName;
        $this->contactPhone  = $contactPhone;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->subject( $this->name . ' wants to share studio: ' . $this->studioName )
            ->view( 'emails.shareAStudio' );
    }
}
