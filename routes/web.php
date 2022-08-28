<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ProductsController;

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

Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/', [HomeController::class,  'home'],)->name('home');
//Group Route

Route::get('/products', [ProductsController::class, 'homeTemp'])->name('products');

Route::get('/product', function () {
    return view('product_details');
});

Route::get('/product/{slug}', [ProductDetailsController::class, 'show'])->name('product_details');


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/my-bid', function () {
    return view('my_bid');
});

Route::get('/winning-bids', function () {
    return view('winning_bid');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/favorites', function () {
    return view('favorites');
});


Route::get('/referrals', function () {
    return view('referral');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/404', function () {
    return view('404');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
