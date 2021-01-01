<?php

use App\Http\Controllers\FollowsController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\ProfilesControllerController;

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
Auth::routes();
Route::middleware('auth')->group(function () {

    Route::get('/tweets', [TweetsController::class, 'index'])->name('home');
    Route::post('/tweets', [TweetsController::class, 'store']);

    Route::post('/profiles/{user:username}/follow', [FollowsController::class, 'store']);
    Route::get('/profiles/{user:username}/edit', [ProfilesController::class, 'edit'])->middleware('can:edit, user');

});
Route::get('/profiles/{user:username}', [ProfilesController::class, 'show'])->name('profile');


