<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::get('/', [PublicController::class , 'homepage'])->name('homepage');

Route::resource('article', ArticleController::class);
Route::resource('categories', CategoryController::class);

Route::get('/article/create',[ArticleController::class,  'create'])->name('article.create');
