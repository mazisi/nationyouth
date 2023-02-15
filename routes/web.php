<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\VacanciesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogDeleteAllController;
use App\Http\Controllers\DonateController;


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::resource('admins', AdminsController::class)->middleware('isAdmin');

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('/dashboard',[DashboardController::class,'update_profile']);
Route::post('/profile_picture',[UpdateProfileController::class,'update'])->name('profile.change');



Route::resource('vacancies', VacanciesController::class);
Route::post('/delete_all_vacancies',[VacanciesController::class,'destroy_all'])->name('vacancies.delete_all');

Route::resource('category', CategoryController::class);
Route::post('/delete_all_categories',[CategoryController::class,'destroy_all'])->name('categories.delete_all');

//courses related
Route::resource('programs', ProgramsController::class);
Route::post('/delete_all_courses',[ProgramsController::class,'destroy_all'])->name('courses.delete_all');

//blog related
Route::resource('blogs', BlogController::class);
Route::post('/delete_all_blogs',[BlogDeleteAllController::class,'destroy'])->name('delete_blogs.delete_all');
Route::resource('applicants', ApplicationsController::class);

//testimonials related
Route::resource('appreciation', TestimonialsController::class);
Route::post('/delete_all',[TestimonialsController::class,'destroy_all'])->name('testimonials.delete_all');

Route::get('/gallery',[GalleryController::class,'index'])->name('gallery');

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/donate',[DonateController::class,'index'])->name('donate');

Route::resource('contact', ContactController::class);
//auth related
Route::post('/login',[LoginController::class,'store'])->name('login');
Route::post('/logout',[LogoutController::class,'store'])->name('logout');
Route::resource('changepassword', ChangePasswordController::class);