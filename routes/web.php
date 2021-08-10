<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Livewire\PostCard;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('post/{id}', PostCard::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/upload', function () {
    return view('upload');
})->name('upload');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/linkstorage', function () {
//     Artisan::call('storage:link');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/post/{_id}', PostCard::class)->name('post');

Route::middleware(['auth:sanctum', 'verified'])->get('/users', [UserController::class, 'index'])
->name('users');

/********* bardo iberico  */
Route::view('/elbardoiberico', 'elbardoiberico');

Route::view('/elbardoiberico/avillafer', 'avillafer');
Route::view('/elbardoiberico/aalfonsovi', 'aalfonsovi');
Route::view('/elbardoiberico/loscisnesderuben', 'loscisnesderuben');
Route::view('/elbardoiberico/ovillejos', 'ovillejos');
Route::view('/elbardoiberico/quintillas', 'quintillas');
Route::view('/elbardoiberico/redondillas', 'redondillas');
Route::view('/elbardoiberico/santicosdeleon', 'santicosdeleon');
Route::view('/elbardoiberico/seguidilladelaera', 'seguidilladelaera');
Route::view('/elbardoiberico/villanelladelaguadelrio', 'villanelladelaguadelrio');



Route::resource('comments', 'CommentsController');
