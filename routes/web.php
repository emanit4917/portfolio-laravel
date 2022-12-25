<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\backend\LogoController;
use App\Http\Controllers\backend\HeroController;
use App\Http\Controllers\backend\BrandlogoController;
use App\Http\Controllers\backend\GlobalController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\TestmonialController;
use App\Http\Controllers\backend\ProductController;

use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\BlogpostController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\SocailinfoController;
use App\Http\Controllers\backend\SinglePortfolioController;



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
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//__Frontent Route __//
Route::get('/',[FrontendController::class, 'index'])->name('home.sect');
Route::get('about/',[FrontendController::class, 'about'])->name('about');
Route::get('portfolio/',[FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('portfolio/single/',[FrontendController::class, 'single'])->name('portfoliosingle');
Route::get('contact/',[FrontendController::class, 'contact'])->name('contact');

//__Frontent logo part Route __//
Route::get('logo/',[LogoController::class, 'index'])->name('logo');
Route::post('logo/store',[LogoController::class, 'store'])->name('logo.store');
Route::get('logo/view',[LogoController::class, 'create'])->name('logo.view');
Route::get('logo/delete/{id}',[LogoController::class, 'destroy'])->name('logo.delete');
Route::get('logo/edit/{id}',[LogoController::class, 'edit'])->name('logo.edit');
Route::post('logo/updated/{id}',[LogoController::class, 'updated'])->name('logo.updated');

//__Frontent Hero section part Route __//
Route::get('hero/section',[HeroController::class, 'index'])->name('hero.section');
Route::post('hero/store',[HeroController::class, 'store'])->name('hero.store');
Route::get('hero/create',[HeroController::class, 'create'])->name('hero.create');
Route::get('hero/delete/{id}',[HeroController::class, 'destroy'])->name('hero.delete');
Route::get('hero/edit/{id}',[HeroController::class, 'edit'])->name('hero.edit');
Route::post('hero/updated/{id}',[HeroController::class, 'updated'])->name('hero.updated');

//__Brand Logo section part Route __//
Route::get('brand',[BrandlogoController::class, 'index'])->name('brand');
Route::post('brand/store',[BrandlogoController::class, 'store'])->name('brand.store');
Route::get('brand/create',[BrandlogoController::class, 'create'])->name('brand.create');
Route::get('brand/delete/{id}',[BrandlogoController::class, 'destroy'])->name('brand.delete');

//__Global  section part Route __//

Route::get('global/add',[GlobalController::class, 'index'])->name('global.add');
Route::post('global/store',[GlobalController::class, 'store'])->name('global.store');
Route::get('global/crate',[GlobalController::class, 'create'])->name('global.crate');
Route::get('global/delete/{id}',[GlobalController::class, 'destroy'])->name('global.delete');

//__Service  section part Route __//
Route::get('service',[ServiceController::class, 'index'])->name('service');
Route::post('service/store',[ServiceController::class, 'store'])->name('service.store');
Route::get('service/view',[ServiceController::class, 'create'])->name('service.view');
Route::get('service/delete/{id}',[ServiceController::class, 'destroy'])->name('service.delete');
Route::get('service/edit/{id}',[ServiceController::class, 'edit'])->name('service.edit');
Route::post('service/updated/{id}',[ServiceController::class, 'updated'])->name('service.updated');

//__Testmonial  section part Route __//
Route::get('testmonial',[TestmonialController::class, 'index'])->name('testmonial');
Route::post('testmonial/store',[TestmonialController::class, 'store'])->name('testmonial.store');
Route::get('testmonial/create',[TestmonialController::class, 'create'])->name('testmonial.create');
Route::get('testmonial/delete/{id}',[TestmonialController::class, 'destroy'])->name('testmonial.delete');
Route::get('testmonial/edit/{id}',[TestmonialController::class, 'edit'])->name('testmonial.edit');
Route::post('testmonial/updated{id}',[TestmonialController::class, 'updated'])->name('testmonial.updated');

//__Product  section part Route __//
Route::get('product',[ProductController::class, 'index'])->name('product');
Route::post('product/store',[ProductController::class, 'store'])->name('product.store');
Route::get('product/create',[ProductController::class, 'create'])->name('product.create');
Route::get('product/delete/{id}',[ProductController::class, 'destroy'])->name('product.delete');
Route::get('product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
Route::post('product/updated/{id}',[ProductController::class, 'updated'])->name('product.updated');

//__About section part Route __//
Route::get('about/sect',[AboutController::class, 'index'])->name('about.sect');
Route::post('about/store',[AboutController::class, 'store'])->name('about.store');
Route::get('about/create',[AboutController::class, 'create'])->name('about.create');
Route::get('about/delete/{id}',[AboutController::class, 'destroy'])->name('about.delete');

//__About Blog Post part Route __//
Route::get('blog/post',[BlogpostController::class, 'index'])->name('blog.post');
Route::post('blog/store',[BlogpostController::class, 'store'])->name('blog.store');
Route::get('blog/create',[BlogpostController::class, 'creates'])->name('blog.create');
Route::get('blog/delete/{id}',[BlogpostController::class, 'destroy'])->name('blog.delete');
Route::get('blog/edit/{id}',[BlogpostController::class, 'edit'])->name('blog.edit');
Route::post('blog/updated/{id}',[BlogpostController::class, 'updated'])->name('blog.updated');
 
//__Socail page part Route __//
Route::get('social',[SocailinfoController::class, 'index'])->name('social');
Route::post('social/store',[SocailinfoController::class, 'socialstore'])->name('social.store');
Route::get('social/create',[SocailinfoController::class, 'create'])->name('social.create');
Route::get('contact/delete/{id}',[SocailinfoController::class, 'destroy'])->name('contact.delete');

//__Contact page part Route __//
Route::post('contact/store',[ContactController::class, 'contactstore'])->name('contact.store');

//__Single Portfolio page  Route __//
Route::get('sigle/portfolio',[SinglePortfolioController::class, 'index'])->name('sigle.portfolio');
Route::post('single/store',[SinglePortfolioController::class, 'store'])->name('single.store');
Route::get('sigle/create',[SinglePortfolioController::class, 'create'])->name('sigle.create');
Route::get('single_port/delete/{id}',[SinglePortfolioController::class, 'destroy'])->name('single_port.delete');
Route::get('single_port/edit/{id}',[SinglePortfolioController::class, 'edit'])->name('single_port.edit');
Route::post('single/updated/{id}',[SinglePortfolioController::class, 'updated'])->name('single.updated');






