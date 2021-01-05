<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostController;




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

Route::get('/',[ProductController::class, 'index'])->name('product.index');

Route::get('/user',[UserController::class, 'index'])->name('user.index');

Route::get('/post',[ClientController::class, 'getAllPost'])->name('posts.getAllPost');

Route::get('/post/{id}', [ClientController::class, 'postById'])->name('posts.postById');

Route::get('/add-post', [ClientController::class, 'addPost'])->name('addPost.addPost');

Route::get('/update-post', [ClientController::class, 'updatePost'])->name('post.updatePost');

Route::get('/delete-post/{id}', [ClientController::class, 'deletePost'])->name('post.deletePost');

Route::get('fluent-string', [FluentController::class, 'index'])->name('fluent.index');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkuser');

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'gerSessionData'])->name('session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('session.store');

Route::get('/session/remove', [SessionController::class, 'deleteSessionData'])->name('session.remove');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('post.getAllpost');