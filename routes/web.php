<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', user\UserController::class. '@index')->name('user.index');
Route::get('/products', user\UserController::class. '@products')->name('user.products');
Route::get('/technician', user\UserController::class. '@technician')->name('user.technician');
Route::get('/about', user\UserController::class. '@about')->name('user.about');
Route::get('/benefits', user\UserController::class. '@benefits')->name('user.benefits');
Route::get('/contact', user\UserController::class. '@contact')->name('user.contact');
Route::post('/login', user\UserController::class. '@login')->name('user.login');
Route::get('/registration', user\UserController::class. '@registration')->name('user.registration');
Route::get('/services', user\UserController::class. '@services')->name('user.services');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'authadmin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/dashboard', admin\DashboardController::class. '@index')->name('dashboard');
    Route::get('/company-setting/{id}/edit', admin\CompanySettingController::class. '@edit')->name('companySetting.edit');
    Route::post('/company-setting/{id}/update', admin\CompanySettingController::class. '@update' )->name('companySetting.update');

    Route::get('/benefits', admin\BenefitsController::class. '@index')->name('benefit.index');
    Route::get('/benefits/create', admin\BenefitsController::class. '@create')->name('benefit.create');
    Route::post('/benefits/store', admin\BenefitsController::class. '@store')->name('benefit.store');
    Route::get('/benefits/{id}/edit', admin\BenefitsController::class. '@edit')->name('benefit.edit');
    Route::post('/benefits/{id}/update', admin\BenefitsController::class. '@update')->name('benefit.update');
    Route::get('/benefits/{id}/delete', admin\BenefitsController::class. '@destroy')->name('benefit.destroy');

    Route::get('/choose', admin\ChooseController::class. '@index')->name('choose.index');
    Route::get('/choose/create', admin\ChooseController::class. '@create')->name('choose.create');
    Route::post('/choose/store', admin\ChooseController::class. '@store')->name('choose.store');
    Route::get('/choose/{id}/edit', admin\ChooseController::class. '@edit')->name('choose.edit');
    Route::post('/choose/{id}/update', admin\ChooseController::class. '@update')->name('choose.update');
    Route::get('/choose/{id}/delete', admin\ChooseController::class. '@destroy')->name('choose.destroy');

    Route::get('/product', admin\ProductController::class. '@index')->name('product.index');
    Route::get('/product/create', admin\ProductController::class. '@create')->name('product.create');
    Route::post('/product/store', admin\ProductController::class. '@store')->name('product.store');
    Route::get('/product/{id}/edit', admin\ProductController::class. '@edit')->name('product.edit');
    Route::post('/product/{id}/update', admin\ProductController::class. '@update')->name('product.update');
    Route::get('/product/{id}/delete', admin\ProductController::class. '@destroy')->name('product.destroy');

    Route::get('/product_category', admin\ProductCategoryController::class. '@index')->name('product_category.index');
    Route::get('/product_category/create', admin\ProductCategoryController::class. '@create')->name('product_category.create');
    Route::post('/product_category/store', admin\ProductCategoryController::class. '@store')->name('product_category.store');
    Route::get('/product_category/{id}/edit', admin\ProductCategoryController::class. '@edit')->name('product_category.edit');
    Route::post('/product_category/{id}/update', admin\ProductCategoryController::class. '@update')->name('product_category.update');
    Route::get('/product_category/{id}/delete', admin\ProductCategoryController::class. '@destroy')->name('product_category.destroy');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

