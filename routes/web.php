<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\SlugController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\BlogController;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/blogDetails', function () {
    return view('bind-pages.blogDetails');
});


Route::get('/careers', function () {
    return view('bind-pages.careers');
});


Route::get('/our-projects', function () {
    return view('bind-pages.our-projects');
});


Route::get('/tech-stack', function () {
    return view('bind-pages.tech-stack');
});


Route::get('/contact', function () {
    return view('bind-pages.contact');
});

Route::get('/privacy', function () {
    return view('bind-pages.privacy');
});

Route::get('/terms', function () {
    return view('bind-pages.terms-and-conditions');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/products/{slug}', [SlugController::class, 'ProductsShow'])->name('product.show');
Route::get('/services/{slug}', [SlugController::class, 'ServicesShow'])->name('ServicesShow');
Route::get('/project-details/{slug}', [SlugController::class, 'ProjectShow'])->name('ProjectShow');
Route::get('/blog-details/{slug}', [SlugController::class, 'BlogShow'])->name('BlogShow');
Route::get('/careers/{slug}', [SlugController::class, 'CareerShow'])->name('CareerShow');

Route::post('/mailSubmit', [MailController::class, 'mailSubmit'])->name('mailSubmit');
Route::post('/mailSubmitOnCareers', [MailController::class, 'mailSubmitOnCareers'])->name('mailSubmitOnCareers');

Route::post('/submit-inquiry', [MailController::class, 'inquirySubmit'])
    ->name('inquiry.submit');