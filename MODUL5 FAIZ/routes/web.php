<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('content.home');
});


Route::get('/home', [ProductController::class, 'index'])->name('content.home');

Route::get('/product', [ProductController::class, 'product'])->name('product');

Route::get('/orderEvent', [ProductController::class, 'add']);

Route::post('/orderEvent', [ProductController::class, 'orderEvent'])->name('orderEvent');

Route::get('/updateEvent/{id}', [ProductController::class, 'update'])->name('content.updateEvent');

Route::post('/updateEvent', [ProductController::class, 'updateEvent'])->name('updateEvent');

Route::post('/delete', [ProductController::class, 'delete'])->name('content.deleteEvent');

Route::get('/order', [ProductController::class, 'order'])->name('order');

Route::get('/orderDetail/{id}', [ProductController::class, 'addDetail'])->name('content.orderDetail');

Route::post('/orderDetail', [ProductController::class, 'orderDetail'])->name('orderDetail');

Route::get('/history/{id}', [ProductController::class, 'history'])->name('history');

// Route::get('/orderEvent', [ProductController::class, 'addProduct']);

// Route::post('/orderEvent', [ProductController::class, 'orderEvent'])->name('orderEvent');

// Route::get('/product', [ProductController::class, 'add']);
// Route::post('/product', [ProductController::class, 'orderEvent'])->name('orderEvent');

// Route::get('/orderEvent', [ProductController::class, 'add']);


// Route::post('/orderEvent', [ProductController::class, 'orderEvent']);

// Route::post('/orderEvent', [ProductController::class, 'orderEvent']);

// Route::get('/orderEvent', function () {
//     return view('content.orderEvent');
// });


// Route::prefix('content')->group(function () {
    
    
    // Route::post('/product', [ProductController::class, 'orderEvent'])->name('orderEvent');
    
    
// });

// Route::get('/home', function () {
//     return view('content.home');
// });

// Route::get('/product', function () {
//     return view('content.product');
// });

// Route::get('/order', function () {
//     return view('content.order');
// });

// Route::get('/history', function () {
//     return view('content.history');
// });


// Route::get('/updateEvent', function () {
//     return view('content.updateEvent');
// });

// Route::get('/orderDetail', function () {
//     return view('content.orderDetail');
// });