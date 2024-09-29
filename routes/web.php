<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Models\Service;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Bachtiar Dwi J",
        "email" => "bachtiardwi.julianto@gmail.com",
        "image" => "face-3.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

Route::get('/service', [ServiceController::class, 'index']);

// Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Halaman Single Service
Route::get('/service/{service:nama}', [ServiceController::class, 'show']);


Route::get('/categories', function(){
    return view('categories', [
        'tittle' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

// penanganan form register
Route::post('/register', [RegisterController::class, 'store']);

// penanganan form login
Route::post('/login', [LoginController::class, 'authenticate']);

// penanganan logout
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSLug'])->middleware('auth');

// penanganan crud dashboard resource
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// penanganan authorization(admin)
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

