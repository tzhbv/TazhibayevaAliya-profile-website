<?php

use Illuminate\Support\Facades\Route;

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
<<<<<<< HEAD

Route::get('/post/create',function ()
{
	DB::table('postss')->insert([
		'title' => 'Aliya Tazhibayeva',
		'body' => 'Hello'
	]);
});

Route::get('/post',function(){
	$post = Post::find(1);
	return $post->title;
});


=======
>>>>>>> c971bc1a004cc17b13335db1c89013bb34374c97
