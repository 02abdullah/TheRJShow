<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PagesController::class, 'getIndex']);
Route::get('videos', [PagesController::class, 'getVideos']);
Route::get('about', [PagesController::class, 'getAbout']);
Route::get('posts/search', [PostController::class, 'search'])->name('posts.search');
Route::get('posts/category/{category}', [PostController::class, 'category'])->name('posts.category');
Route::resource('posts',PostController::class);



Auth::routes();

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/')->with('message', 'Logged out successfully!');
})->name('logout');
