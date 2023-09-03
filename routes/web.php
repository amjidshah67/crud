<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;
use App\Http\Controllers\ModrenaController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Fagecontroller;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\PakagesController;
use App\Http\Controllers\ContactQuerieController;
use App\Http\Controllers\NewsLettersController;
use App\Http\Controllers\PhotoFolioController;
use App\Http\Controllers\HeroBizController;
use App\Http\Controllers\FrontLoginController;

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
//Authentication//
Route::get('login-admin', [AuthenticationController::class, 'index'])->name('login-admin');
Route::post('login', [AuthenticationController::class, 'login'])->name('check-login');
Route::get('registration', [AuthenticationController::class, 'register'])->name('registration');
Route::post('registration-post', [AuthenticationController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');

//dashboard
Route::get('/', [AdminController::class, 'index'])->name('admin');
Route::get('users', [AdminController::class, 'user'])->name('users');
Route::get('profile', [AdminController::class, 'profile'])->name('profile');
Route::get('tabel', [AdminController::class, 'tabel'])->name('tabel');
Route::get('faq', [AdminController::class, 'faq'])->name('faq');
Route::get('contact', [AdminController::class, 'contact'])->name('contact');
Route::get('error', [AdminController::class, 'error'])->name('error');
Route::get('blank', [AdminController::class, 'blank'])->name('blank');
Route::get('alert', [AdminController::class, 'alert'])->name('alert');
Route::get('accordion', [AdminController::class, 'accordion'])->name('accordion');
Route::get('badges', [AdminController::class, 'badges'])->name('badges');

//crud
Route::resource('users', UserController::class);

//Service
Route::resource('services', ServiceController::class);

//Brand
Route::resource('brands', BrandController::class);

//pages
Route::resource('pages', PageController::class);

//FAQS
Route::resource('faqes', Fagecontroller::class);

//skills
Route::resource('skilles', SkillsController::class);

//Categories
Route::resource('categories',CategorieController::class);

//products
Route::resource('productes',ProductsController::class);

//Teams
Route::resource('Teames', TeamsController::class);

//Pakage
Route::resource('Pakages',PakagesController::class);

// Content Query
Route::resource('ContactQuerie',ContactQuerieController::class);

//News Letters
Route::resource('NewsLetter', NewsLettersController::class);


//frontlogin
Route::get('Front-login',[FrontLoginController::class, 'index'])->name('front-login');
Route::post('postLogin',[FrontLoginController::class, 'login_post'])->name('postLogin');
Route::get('Front-register',[FrontLoginController::class, 'registration'])->name('front-register');
Route::post('post-register',[FrontLoginController::class, 'register_post'])->name('post-register');
Route::get('front-logout',[FrontLoginController::class, 'logout'])->name('front-logout');

//-------------------------Front----------------------------------------//
Route::get('front', [FrontController::class, 'index'])->name('front');
Route::post('store-store', [FrontController::class, 'store'])->name('front-store');
Route::post('news-Letter',[FrontController::class, 'news_letter'])->name('news-letter');


//----------------------modrena-----------------------------//
Route::get('modrena', [ModrenaController::class, 'index'])->name('modrena');
Route::get('about', [ModrenaController::class, 'about'])->name('about');
Route::get('service', [ModrenaController::class, 'service'])->name('service');
Route::get('portfolio', [ModrenaController::class, 'portfolio'])->name('portfolio');
Route::get('team', [ModrenaController::class, 'team'])->name('team');
Route::get('blog', [ModrenaController::class, 'blog'])->name('blog');
Route::get('contact', [ModrenaController::class, 'contactUs'])->name('contact');





//Photofolio
Route::get('photofolio', [PhotoFolioController::class, 'index'])->name('photofolio');
Route::get('about',[PhotoFolioController::class,'about_us'])->name('about');
Route::get('contact',[PhotoFolioController::class,'contact'])->name('contact-photo');
Route::get('gallery',[PhotoFolioController::class,'gallery_singal'])->name('gallery');
Route::get('services-photo',[PhotoFolioController::class,'service'])->name('services-photo');
Route::get('simple-inner',[PhotoFolioController::class,'simple'])->name('simple-inner');

//HeroBiz
Route::get('herobiz',[HeroBizController::class,'index'])->name('herobiz');
Route::get('index-two',[HeroBizController::class,'index_two'])->name('index-two');
Route::get('index-three',[HeroBizController::class,'index_three'])->name('index-three');
Route::get('index-four',[HeroBizController::class,'index_four'])->name('index-four');
Route::get('blog',[HeroBizController::class,'blog'])->name('blog');
Route::get('blog-detail',[HeroBizController::class,'blog_detail'])->name('blog-detail');
Route::get('portfolio',[HeroBizController::class,'portfolio'])->name('portfolio');
