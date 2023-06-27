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

Route::get('/', function () {

    $data = [
        'links' => config('store.navLinks'),
        'products' => config('comics'),
        'footerItems' => config('store.footerItems'),
    ];
    return view('welcome', $data);
});

// Route::get('/comics', function () {
//     return view('other', compact('products'));
// });
