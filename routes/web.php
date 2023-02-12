<?php

use Illuminate\Support\Facades\Route;

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
/*Redirecting Laravel home page*/
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
/*below route is changed '/home' to '/'*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    //Admin Dashboard
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    //Category Routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('category', 'index');
        Route::get('category/create', 'create');
        Route::post('category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('category/{category}','update');
    });
    //Brands Routes
    Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class);
});

Route::prefix('faculty')->middleware(['auth','isFaculty'])->group(function(){
    //Admin Dashboard
    Route::get('dashboard', [App\Http\Controllers\Faculty\DasboardController::class, 'index']);
    //Category Routes
    // Route::controller(App\Http\Controllers\Faculty\CategoryController::class)->group(function () {
    //     Route::get('category', 'index');
    //     Route::get('category/create', 'create');
    //     Route::post('category', 'store');
    //     Route::get('/category/{category}/edit', 'edit');
    //     Route::put('category/{category}','update');
    // });
    //Brands Routes
    // Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class);
});