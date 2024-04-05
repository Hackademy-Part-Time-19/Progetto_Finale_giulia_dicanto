<?php

use App\Livewire\Form;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use \App\Models\Article;

Route::get('/', [PublicController::class , 'homepage'])->name('homepage');

Route::get('/article/category/{category_id}', [CategoryController::class, "CategoryIndex"])->name("category");

Route::resource('article', ArticleController::class);
Route::resource('category', CategoryController::class);

Route::get('/careers' ,[PublicController::class, 'careers'])->name('careers');
Route::post('/careers/submit' ,[PublicController::class, 'careersSubmit'])->name('careers.submit');
