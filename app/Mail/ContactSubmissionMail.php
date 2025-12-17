<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $filePath;
    public $fileName;

    public function __construct($data)
    {
        $this->data = $data;

    }

    public function build()
    {
        return $this->subject('New Contact Form Submission')
            ->view('admin::layouts.email-view-contact')
            ->with('data', $this->data);
    }
    
}
