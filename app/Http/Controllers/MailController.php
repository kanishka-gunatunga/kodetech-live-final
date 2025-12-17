<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CareerSubmissionMail;
use App\Mail\ContactSubmissionMail;
use Illuminate\Support\Facades\Http;
class MailController extends Controller
{
    public function mailSubmit(Request $request)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => ['required', 'regex:/^\+?[0-9]{7,15}$/'],
            'message' => 'required|string|max:700',
            'g-recaptcha-response' => 'required',
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => '6LdUdJ0rAAAAAP1FZS1XTPiDASNAhaA7OlIIdimG',
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
        ]);
    
        $responseBody = $response->json();
    
        if (!($responseBody['success'] ?? false)) {
            return back()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.'])
                         ->withInput();
        }

        // Mail::raw($request->message, function ($message) use ($request) {
        //     $message->to('xefac94649@efpaper.com')
        //         ->subject('Contact Form Submission from ' . $request->first_name . ' ' . $request->last_name);
        //     $message->from($request->email);
        // });
        
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ];
        
         Mail::to('hellokodetech@gmail.com')->send(new ContactSubmissionMail($data));
         
        return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon!');
    }



    public function mailSubmitOnCareers(Request $request)
{
    try {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:700',
            // 'file' => 'required|mimes:pdf|max:2048', // Uncomment if needed
            'check' => 'required|accepted',
            'g-recaptcha-response' => 'required',
        ]);
        
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret' => '6LdUdJ0rAAAAAP1FZS1XTPiDASNAhaA7OlIIdimG',
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
        ]);
    
        $responseBody = $response->json();
    
        if (!($responseBody['success'] ?? false)) {
            return back()->withErrors(['g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.'])
                         ->withInput();
        }
        
        // File Handling
        if (!$request->hasFile('CV') || !$request->file('CV')->isValid()) {
            return redirect()->back()->with('error', 'File upload failed or invalid file.');
        }

        $uploadedFile = $request->file('CV');
        $originalFileName = $uploadedFile->getClientOriginalName();
        $filePath = $uploadedFile->storeAs('attachments', $originalFileName, 'public');
        $fullPath = storage_path('app/public/' . $filePath);

        // Prepare data
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('hellokodetech@gmail.com')->send(new CareerSubmissionMail($data, $fullPath, $originalFileName));

        return redirect()->back()->with('success', 'Thank you for your application. We will get back to you soon!');

    } catch (\Illuminate\Validation\ValidationException $e) {
        // Handles validation errors
        return redirect()->back()->withErrors($e->validator)->withInput();
    } catch (\Exception $e) {
        // Handles general errors (file issues, email errors, etc.)
        return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage())->withInput();
    }
}

}
