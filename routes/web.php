<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AnswerController;


//Creación de rutas a cada vista, están en views, aquí se llama la funcion del UserController
//la cual llama a la vista de login
Route::get('/',  [UserController::class, 'index'])->name('index');

//crea la ruta para la parte de registrar usuario
Route::get('/sign-in',  [UserController::class, 'create'])->name('user.create');
Route::post('/sign-in',  [UserController::class, 'store'])->name('user.store');

Route::post('/create-yarn',  [ArticleController::class, 'store'])->name('article.store');

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
Route::get('principal', [PrincipalController::class, 'index'])->name ('login.authenticate');

//Route::get('/yarn-answer/{id}',function($id){return $id;}, [AnswerController::class, 'index'])->name ('answer.index');
Route::post('/yarn-answer', [AnswerController::class, 'store'])->name ('answer.store');
Route::get('/yarn-answer/{id}', [AnswerController::class, 'index'])->name ('answer.index');



