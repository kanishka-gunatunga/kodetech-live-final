<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $filePath;
    public $fileName;

    public function __construct($data, $filePath,$fileName)
    {
        $this->data = $data;
        $this->filePath = $filePath;
        $this->fileName = $fileName;
    }

    public function build()
    {
        return $this->subject('New Career Submission')
            ->view('admin::layouts.email-view')
            ->with('data', $this->data)
            ->attach($this->filePath, [
                'as' => $this->fileName,
                'mime' => 'application/pdf',
            ]);
    }
    
}
