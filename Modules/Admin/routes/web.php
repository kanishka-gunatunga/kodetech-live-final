<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\AddSectionController;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\BlogController;
use Modules\Admin\Http\Controllers\CareerController;
use Modules\Admin\Http\Controllers\ProductController;
use Modules\Admin\Http\Controllers\ProjectController;
use Modules\Admin\Http\Controllers\ServiceController;
use Modules\Admin\Http\Controllers\UserController;
use Modules\Admin\Http\Controllers\ClientController;
use Modules\Admin\Http\Controllers\ProductIconController;
use Modules\Admin\Http\Controllers\ServiceIconController;
use Modules\Admin\Http\Controllers\TestimonialController;
use Modules\Admin\Http\Middleware\AuthAdmin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('admin')->group(function() {
    Route::match(['get', 'post'],'/', [UserController::class, 'login']);
    // Route::match(['get', 'post'],'/sign-up', [UserController::class, 'login']);
    Route::match(['get', 'post'],'/dashboard', [UserController::class, 'dashboard'])->middleware(AuthAdmin::class)->name('admin.dashboard');
    Route::match(['get', 'post'],'/add-migrant', [UserController::class, 'addMigrant'])->middleware(AuthAdmin::class);
    Route::get('/logout', [UserController::class, 'logout']);
});


Route::prefix('admin')->group(function(){
    Route::match(['get','post'],'/add-project',[ProjectController::class, 'addProject'])->middleware((AuthAdmin::class));
    Route::get('/edit-project/{id}', [ProjectController::class, 'edit'])->middleware(AuthAdmin::class)->name('project.edit');
    Route::post('/update-project/{id}', [ProjectController::class, 'update'])->middleware(AuthAdmin::class)->name('project.update');
    Route::delete('/delete-project/{id}', [ProjectController::class, 'destroy'])->middleware(AuthAdmin::class)->name('project.destroy');


    Route::match(['get','post'],'/add-product',[ProductController::class, 'addProduct'])->middleware((AuthAdmin::class));
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->middleware(AuthAdmin::class)->name('product.edit');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->middleware(AuthAdmin::class)->name('product.update');
    Route::delete('/delete-product/{id}', [ProductController::class, 'destroy'])->middleware(AuthAdmin::class)->name('product.destroy');


    Route::match(['get','post'],'/add-service',[ServiceController::class, 'addService'])->middleware((AuthAdmin::class));
    Route::get('/edit-service/{id}', [ServiceController::class, 'edit'])->middleware(AuthAdmin::class)->name('service.edit');
    Route::post('/update-service/{id}', [ServiceController::class, 'update'])->middleware(AuthAdmin::class)->name('service.update');
    Route::delete('/delete-service/{id}', [ServiceController::class, 'destroy'])->middleware(AuthAdmin::class)->name('service.destroy');


    Route::match(['get','post'],'/add-testimonial',[TestimonialController::class, 'addTestimonial'])->middleware((AuthAdmin::class));
    Route::get('/edit-testimonial/{id}', [TestimonialController::class, 'edit'])->middleware(AuthAdmin::class)->name('testimonial.edit');
    Route::post('/update-testimonial/{id}', [TestimonialController::class, 'update'])->middleware(AuthAdmin::class)->name('testimonial.update');
    Route::delete('/delete-testimonial/{id}', [TestimonialController::class, 'delete'])->middleware(AuthAdmin::class)->name('testimonial.delete');




    Route::match(['get','post'],'/add-client',[ClientController::class, 'addClient'])->middleware((AuthAdmin::class));


    Route::match(['get','post'],'/add-blog',[BlogController::class, 'addBlog'])->middleware((AuthAdmin::class));
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->middleware(AuthAdmin::class)->name('blog.edit');
    Route::post('/update-blog/{id}', [BlogController::class, 'update'])->middleware(AuthAdmin::class)->name('blog.update');
    Route::delete('/delete-blog/{id}', [BlogController::class, 'delete'])->middleware(AuthAdmin::class)->name('blog.delete');



    // Route::match(['get','post'],'/add-career',[CareerController::class, 'addCareer'])->middleware((AuthAdmin::class));
    Route::get('/add-career',[CareerController::class, 'index'])->middleware(AuthAdmin::class)->name('career.index');
    Route::post('/add-career',[CareerController::class, 'addCareer'])->middleware(AuthAdmin::class)->name('career.add');
    Route::get('/edit-career/{id}', [CareerController::class, 'edit'])->middleware(AuthAdmin::class)->name('career.edit');
    Route::post('/update-career/{id}', [CareerController::class, 'update'])->middleware(AuthAdmin::class)->name('career.update');
    Route::delete('/delete-career/{id}', [CareerController::class, 'delete'])->middleware(AuthAdmin::class)->name('career.delete');


    Route::get('/add-service-icon',[ServiceIconController::class, 'index'])->middleware(AuthAdmin::class)->name('serviceIcon.index');
    Route::post('/add-service-icon',[ServiceIconController::class, 'addServiceIcon'])->middleware(AuthAdmin::class)->name('serviceIcon.add');
    Route::get('/edit-service-icon/{id}', [ServiceIconController::class, 'edit'])->middleware(AuthAdmin::class)->name('serviceIcon.edit');
    Route::post('/update-service-icon/{id}', [ServiceIconController::class, 'update'])->middleware(AuthAdmin::class)->name('serviceIcon.update');
    Route::delete('/delete-service-icon/{id}', [ServiceIconController::class, 'delete'])->middleware(AuthAdmin::class)->name('serviceIcon.delete');


    Route::get('/add-product-icon',[ProductIconController::class, 'index'])->middleware(AuthAdmin::class)->name('productIcon.index');
    Route::post('/add-product-icon',[ProductIconController::class, 'addProductIcon'])->middleware(AuthAdmin::class)->name('productIcon.add');
    Route::get('/edit-product-icon/{id}', [ProductIconController::class, 'edit'])->middleware(AuthAdmin::class)->name('productIcon.edit');
    Route::post('/update-product-icon/{id}', [ProductIconController::class, 'update'])->middleware(AuthAdmin::class)->name('productIcon.update');
    Route::delete('/delete-product-icon/{id}', [ProductIconController::class, 'delete'])->middleware(AuthAdmin::class)->name('productIcon.delete');
});



Route::get('/about', function () {
    return view('bind-pages.about');
});


// Route::get('/techstack', function () {
//     return view('techstack');
// });

// Route::get('/portfolio', function () {
//     return view('portfolio');
// });


// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/portfoliodetails', function () {
//     return view('portfoliodetails');
// });

// Route::get('/servicedetails', function () {
//     return view('serviceDetails');
// });

