<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog_index',[BlogController::class,'index']);
Route::get('/blog_create',[BlogController::class,'create']);
Route::post('/blog_store',[BlogController::class,'store']);
Route::get('/blog_edit/{id}', [BlogController::class, 'edit']);
Route::get('/blog_show/{id}',[BlogController::class,'show']);
Route::put('/blog_update/{id}', [BlogController::class, 'update']);
Route::delete('/blog_delete/{id}', [BlogController::class, 'destroy']);



Route::get('/product_index',[ProductController::class,'index']);
Route::get('/product_create',[ProductController::class,'create']);
Route::post('/product_store',[ProductController::class,'store']);
Route::get('/product_edit/{id}',[ProductController::class, 'edit']);
Route::get('/product_show/{id}',[ProductController::class,'show']);
Route::put('/product_update/{id}',[ProductController::class, 'update']);
Route::delete('/product_delete/{id}', [ProductController::class, 'destroy']);

Route::get('/slider_index',[SliderController::class,'index']);
Route::get('/slider_create',[SliderController::class,'create']);
Route::post('/slider_store',[SliderController::class,'store']);
Route::get('/slider_edit/{id}',[SliderController::class, 'edit']);
Route::get('/slider_show/{id}',[SliderController::class,'show']);
Route::put('/slider_update/{id}',[SliderController::class, 'update']);
Route::delete('/slider_delete/{id}', [SliderController::class, 'destroy']);

Route::get('/vacancy_index',[VacancyController::class,'index']);
Route::get('/vacancy_create',[VacancyController::class,'create']);
Route::post('/vacancy_store',[VacancyController::class,'store']);
Route::get('/vacancy_edit/{id}',[VacancyController::class, 'edit']);
Route::get('/vacancy_show/{id}',[VacancyController::class,'show']);
Route::put('/vacancy_update/{id}',[VacancyController::class, 'update']);
Route::delete('/vacancy_delete/{id}', [VacancyController::class, 'destroy']);

Route::get('/category_index',[CategoryController::class,'index']);
Route::get('/category_create',[CategoryController::class,'create']);
Route::post('/category_store',[CategoryController::class,'store']);
Route::get('/category_edit/{id}',[CategoryController::class, 'edit']);
Route::get('/category_show/{id}',[CategoryController::class,'show']);
Route::put('/category_update/{id}',[CategoryController::class, 'update']);
Route::delete('/category_delete/{id}', [CategoryController::class, 'destroy']);


Route::get('/subcategory_index',[SubcategoryController::class,'index']);
Route::get('/subcategory_create',[SubcategoryController::class,'create']);
Route::post('/subcategory_store',[SubcategoryController::class,'store']);
Route::get('/subcategory_edit/{id}',[SubcategoryController::class, 'edit']);
Route::get('/subcategory_show/{id}',[SubcategoryController::class,'show']);
Route::put('/subcategory_update/{id}',[SubcategoryController::class, 'update']);
Route::delete('/subcategory_delete/{id}', [SubcategoryController::class, 'destroy']);

