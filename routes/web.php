<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

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
Route::get('post/create', function(){
    DB::table('post')->insert([
       'tittle' => 'Aliya Tazhibayeva',
       'body' => 'Second course student of Suleyman Demirel University , major is IT.'
    ]);
});
Route::get('post', function(){
    $post=Post::find(1);
    return $post->body;
 });
