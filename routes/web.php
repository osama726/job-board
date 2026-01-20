<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TagController;

// Route::get('/', function () {
//     return view('home/index');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get( '/' , [IndexController::class, 'index'] )->name('home');

Route::get('/about', [IndexController::class, 'about'])->name('about');

Route::get('/contacts', [IndexController::class, 'contact'])->name('contact');

Route::get('/jobs', [JobController::class, 'index'])->name('job.index');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::delete('/posts/delete/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/comments', [CommentController::class, 'index'])->name('comment.index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('comment.create');
Route::get('/comments/{post}', [CommentController::class, 'show'])->name('comment.show');

Route::get('/tags', [TagController::class, 'index'])->name('tag.index');
Route::get('/tags/create', [TagController::class, 'create'])->name('tag.create');
Route::get('/tags/test', [TagController::class, 'testManyToMany'])->name('tag.test');
