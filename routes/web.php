<?php


use App\Http\Controllers\ExplorerController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use \App\Http\Controllers\FollowsController;

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

Route::get('/', [PostController::class,'index']);

Route::get('/email', function () {
    return new \App\Mail\newUserWelcomeMail();
});

Route::get('/p/create',[PostController::class,'create']);
Route::post('/p',[PostController::class,'store']);
Route::get('/p/{post}',[PostController::class,'show']);

Route::post('follow/{user}', [FollowsController::class, 'store']);
Route::delete('follow/{follower}', [FollowsController::class, 'remove']);

Route::get('/explore/people', [ExplorerController::class, 'people']);

Auth::routes();

Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');

Route::get('/profile/{user}/followers', [FollowsController::class, 'followers'])->name('profile.followers');
Route::get('/profile/{user}/following', [FollowsController::class, 'following'])->name('profile.following');
//Route::delete('/profile/{user}', [FollowsController::class, 'remove'])->name('profile.remove');




