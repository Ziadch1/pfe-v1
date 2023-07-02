<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController2;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageControll;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/navbar', function () {
    return view('pages.test');
});


//--------------------------------------------------------------

Route::controller(PageControll::class)->group(function (){
    Route::get('/', 'home')->name('home');
    Route::get('/pcgamer', 'pcgamer')->name('pc');
    Route::get('/shope', 'shope')->name('shope');
    Route::get('/data', 'fetchData');
    Route::get('/pcportable', 'pcportable')->name('pcportable');
    Route::get('/monitors', 'monitors')->name('monitors');
    Route::get('/accessoire', 'accessoire')->name('accessoire');
    Route::get('/contact', 'contact')->name('contact');

});

Route::controller(ProductController2::class)->group(function (){
    Route::get('/cart/count', 'getCartCount');
    Route::get('/detailsP/{id}', 'detailsP')->name('detailsP');
    Route::get('/panier/{id}','panier')->name('panier');

});

route::resource('paniers', PanierController::class)->middleware(['auth', 'verified']);