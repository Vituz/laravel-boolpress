<?php

use App\Post;
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


/* Guest Routes */

Route::get('/', function () {
    return view('guest.welcome');
});

Route::get('/', 'PageController@index')->name('home');
Route::get('about', 'PageController@abouts')->name('abouts');

/* Contact Routes */
Route::get('contacts', 'PageController@contacts')->name('contacts');
Route::post('contacts', 'PageController@sendContactForm')->name('contacts.send');

/* Guest posts Routes */
Route::resource('posts', PostController::class)->only(['index', 'show']);

Route::get('vue-blog', function () {
    return view('vue.blog');
})->name('vue-blog');


Auth::routes();

/* Admin Routes */
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('contacts', \ContactController::class)->only('index', 'show');
});
