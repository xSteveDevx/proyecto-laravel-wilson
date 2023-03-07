<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

//Creación de rutas a cada vista, están en views, aquí se llama la funcion del UserController
//la cual llama a la vista de login
Route::get('/',  [UserController::class, 'index'])->name('index');

//crea la ruta para la parte de registrar usuario
Route::get('/sign-in',  [UserController::class, 'create'])->name('user.create');
Route::post('/sign-in',  [UserController::class, 'store'])->name('user.store');

Route::post('/create-yarn',  [PostController::class, 'store'])->name('post.store');

Route::get('/principal', function () {
    return view('principal');
})->name('principal');
Route::get('/yarn-answer', function () {
    return view('yarn-answer');
});
Route::get('/create-yarn', function () {
    return view('create-yarn');
});
Route::post('login', [LoginController::class, 'authenticate'])->name ('login.authenticate');



