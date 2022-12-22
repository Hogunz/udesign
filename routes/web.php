<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReceivingController;
use App\Http\Controllers\StockInController;
use App\Http\Controllers\StockoutController;

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




Route::middleware(['auth'])->group(function() {
    Route::get('/', [ReceivingController::class, 'index']);
 
    Route::resource('receiving', ReceivingController::class);


    Route::get('/category', [CategoryController::class, 'index']);
    Route::resource('category', CategoryController::class);

    Route::get('/size', [SizeController::class, 'index']);
    Route::resource('size', SizeController::class);

    Route::get('/stockin',[StockinController::class, 'index']);
    Route::resource('stockin',StockinController::class);
    Route::get('/stockout',[StockoutController::class, 'index']);
    Route::resource('stockout',StockoutController::class);

    Route::get('size/restore/{id}',[SizeController::class,'restore'])->name('size.restore');
    Route::get('receiving/restore/{id}',[ReceivingController::class,'restore'])->name('receiving.restore');
    Route::get('category/restore/{id}',[CategoryController::class,'restore'])->name('category.restore');
    Route::get('stockin/restore/{id}',[stockinController::class,'restore'])->name('stockin.restore');
    Route::get('stockout/restore/{id}',[stockoutController::class,'restore'])->name('stockout.restore');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
