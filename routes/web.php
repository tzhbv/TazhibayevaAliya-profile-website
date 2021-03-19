<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController; 

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
Route::get('/main', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/home', function () {
    return view('index');
});


Route::get('/post/create',function ()
{
	DB::table('postss')->insert([
		'title' => 'Aliya Tazhibayeva',
		'body' => 'Hello'
	]);
});

Route::get('blog/index',[BlogController::class, 'index']);

Route::get('blog/create',function(){
	return view('post.create');
});

Route::post('blog/create',[BlogController::class, 'store'])->name('add-post');


