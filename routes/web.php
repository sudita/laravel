<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Http\Controllers\postcontroller;

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

Route::get('/', [postcontroller::class, 'home']);
Route::get('/about', [postcontroller::class, 'about']);
Route::get('/posts', [postcontroller::class,'posts']);   
Route::get('/posts/{slug}', [postcontroller::class, 'show']);





