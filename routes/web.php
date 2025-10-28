<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Support\Facades\Route;
Route::get('/hello', function () {
return ' World';
});

Route::get('/selamat', function () {
    return 'selamat datang';
});

Route::get('/about', function () {
    $nim = '243107050003';
    $nama = 'Abdullah Farhanudin Kau';
    return "NIM: $nim <br> Nama: $nama";
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' .$name;
});

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " . $id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [pageController::class, 'index']);
Route::get('/about', [pageController::class, 'about']);
Route::get('/articles/{id}', [pageController::class, 'articles']);

Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class,);

use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

Route::resource('photo', PhotoController::class)->except([
    'index', 'show'
]);

Route::resource('photo', PhotoController::class)->except([
    'index', 'story', 'update', 'destory'
]);

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Farhan']);
});

Route::get('/greeting', [WelcomeController::class,
'greeting']);
