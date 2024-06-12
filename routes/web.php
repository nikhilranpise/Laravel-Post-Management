<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;

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

Route::get('/',[AdminController::class,'index']); 
Route::post('/login', [AdminController::class , 'submit_login']);
Route::get('/logout', [AdminController::class , 'logout']);

Route::group(['middleware' => 'logAdmin'],function(){

	Route::get('/admins', [AdminController::class , 'view_admins'])->middleware('adminProtected');
	Route::get('/add_admin', [AdminController::class , 'add_admin'])->middleware('adminProtected');
	Route::post('/save_admin', [AdminController::class , 'save_admin'])->middleware('adminProtected');
	Route::get('/edit_admin/{id}', [AdminController::class, 'edit_admin'])->middleware('adminProtected');
	Route::post('/update_admin/{id}', [AdminController::class, 'update_admin'])->middleware('adminProtected');
	Route::get('/delete_admin/{id}', [AdminController::class, 'delete_admin'])->middleware('adminProtected');

	//post management crud oprations
	Route::get('/dashboard', [PostsController::class, 'dashboard'])->middleware('adminProtected');
	Route::get('/posts', [PostsController::class, 'index'])->middleware('adminProtected');
	Route::get('/add_post', [PostsController::class, 'add_post'])->middleware('adminProtected');
	Route::post('/save_post', [PostsController::class, 'save_post'])->middleware('adminProtected');
	Route::get('/edit_post/{id}', [PostsController::class, 'edit_post'])->middleware('adminProtected');
	Route::post('/update_post/{id}', [PostsController::class, 'update_post'])->middleware('adminProtected');
	Route::get('/delete_post/{id}', [PostsController::class, 'delete_post'])->middleware('adminProtected');

});

Route::get('/register', [AdminController::class , 'register']);

Route::post('/sign_up', [AdminController::class , 'sign_up']);



