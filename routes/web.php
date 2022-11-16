<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ItemController;
use \App\HTTP\Controllers\BlogController;
use \App\HTTP\Controllers\EventController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/items',[ItemController::class,'index'])->name('items.index');
Route::get('/items/getItemsJson',[ItemController::class,'getItemsJson'])->name('items.getItemsJson');
Route::any('/items/create',[ItemController::class,'create'])->name('items.create');
Route::post('/items/store',[ItemController::class,'store'])->name('items.store');
Route::any('/items/edit/{id}',[ItemController::class,'edit'])->name('items.edit');
Route::post('/items/update',[ItemController::class,'update'])->name('items.update');
Route::any('/items/delete/{id}',[ItemController::class,'destroy'])->name('items.delete');


Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
Route::any('/blogs/delete/{id}',[BlogController::class,'destroy'])->name('blogs.delete');
Route::any('/blogs/create',[BlogController::class,'create'])->name('blogs.create');
Route::post('/blogs/store',[BlogController::class,'store'])->name('blogs.store');
Route::any('/blogs/edit/{id}',[BlogController::class,'edit'])->name('blogs.edit');
Route::post('/blogs/update',[BlogController::class,'update'])->name('blogs.update');


Route::get('/events',[EventController::class,'index'])->name('events.index');
Route::get('/events/getEventsJson',[EventController::class,'getEventsJson'])->name('events.getEventsJson');
Route::any('/events/delete/{id}',[EventController::class,'destroy'])->name('events.delete');
Route::any('/events/create',[EventController::class,'create'])->name('events.create');
Route::post('/events/store',[EventController::class,'store'])->name('events.store');
Route::any('/events/edit/{id}',[EventController::class,'edit'])->name('events.edit');
Route::post('/events/update',[EventController::class,'update'])->name('events.update');

require __DIR__.'/auth.php';
