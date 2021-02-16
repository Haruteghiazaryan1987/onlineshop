<?php

use App\Http\Controllers\MainContriller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainContriller::class, 'index'])->name('index');
Route::get('/categories', [MainContriller::class, 'categories'])->name('categories');
Route::get('/{category}', [MainContriller::class, 'category'])->name('category');
Route::get('/{mobile}/{product?}', [MainContriller::class, 'product'])->name('product');
Route::get('/basket', [MainContriller::class, 'basket'])->name('basket');
Route::get('/basket/place', [MainContriller::class, 'basketPlace'])->name('basket_place');
