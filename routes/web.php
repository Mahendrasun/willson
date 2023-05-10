<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\post;
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

// Route::get('/search', function () {
//     $posts = DB::table('posts')->get();
//     return view('search',compact('posts'));
// });

Route::get('/search',[PostController::class,'Allpost']);
Route::POst('/search-result',[PostController::class,'SearchPost'])->name('search.post');