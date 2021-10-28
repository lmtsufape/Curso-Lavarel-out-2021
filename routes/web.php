<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('hello-world', [HomeController::class, 'index'])->name('home.index');

Route::get('/post/novo', [PostController::class, 'new_post'])->middleware('auth');

Route::get('/post/{id}', [PostController::class, 'getById']);
Route::get('/posts', [PostController::class, 'getAll']);
Route::post('/post/criar', [PostController::class, 'create'])->name('novo_post');
// Route::put('/post/atualizar/{id}', [PostController::class, 'update']);
// Route::delete('/post/deletar/{id}', [PostController::class, 'delete']);

Route::get('/post/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');

require __DIR__.'/auth.php';
