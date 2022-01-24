<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FrontUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\OrganizerController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',         [FrontController::class, 'index'])->name('index');
Route::get('/contacts', [FrontController::class, 'showContacts'])->name('contacts');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/admin/dashboard',          [AdminController::class, 'dashboard'])->name('dashboard');

    // Show & CRUD posts routes admin panel
    Route::get('/admin/posts-tables',       [PostsController::class, 'showPostsTables'])->name('show_posts');
    // Route::get('/admin/post/{id}',          [PostsController::class, 'showPostItem'])->name('show_post_item');
    Route::get('/admin/posts/filter-table', [PostsController::class, 'filterPostsRelatedData'])->name('filter_table');
    Route::get('/admin/post/create',        [PostsController::class, 'createNewPost'])->name('create_post');
    Route::post('/admin/post/edit/{id}',    [PostsController::class, 'updatePost'])->name('edit_post');
    Route::post('/admin/post/save/{id}',    [PostsController::class, 'showPostItem'])->name('save_post');
    Route::any('/admin/post/archive/{id}',  [PostsController::class, 'removePostToArchive'])->name('archive_post');
    Route::any('/admin/post/delete/{id}',   [PostsController::class, 'deletePost'])->name('delete_post');
    // Show & CRUD organizer admin panel
    Route::get('/admin/organizer',          [OrganizerController::class, 'showOrganizerPage']);


});


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
