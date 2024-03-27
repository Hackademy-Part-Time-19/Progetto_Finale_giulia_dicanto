<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use \App\Models\Article;

Route::get('/', [PublicController::class , 'homepage'])->name('homepage');

Route::resource('article', ArticleController::class);
Route::resource('categories', CategoryController::class);

Route::get('/article/create',[ArticleController::class,  'create'])->name('article.create');
Route::post('/article/store',[ArticleController::class,  'store'])->name('article.store');
Route::get('/article/index',[ArticleController::class,  'index'])->name('article.index');
Route::get('/article/show/{article}',[ArticleController::class,  'show'])->name('article.show');