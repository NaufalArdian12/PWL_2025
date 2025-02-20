<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return 'welcome';
// });

// Route::get('about', function () {
//     return 'Hello, My Name Nopal <br> 2341760148';
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);

// Route::get('/user/{name?}', function ($name=null) {
// return 'My name is '.$name;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Article Page with ID '.$id;
// });
