<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProfilController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

Route::get('/author', function () {
    return view('author', [
        "title" => "author",
        'active'=> 'author',
        'users' => DB::table('users')->orderBy('id','asc')->get()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "active" => 'about',
        "title" => "About",
        "name" => "Trian Deni",
        "email" => "triandeni@gmail.com",
        "image" => "deni.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']); 
Route:: get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login', [LoginController::class, 'authenticate']); 
Route::post('/logout', [LoginController::class, 'logout']); 

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest'); 
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth'); 

Route::get('dashboard/posts/checkSlug',[DashboardPostController::class, 'checkSlug'])
       ->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class,)->middleware('auth');

Route::get('dashboard/categories/checkSlug',[AdminCategoryController::class, 'checkSlug'])
       ->middleware('admin');
Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');

Route::get('dashboard/profil/checkSlug',[ProfilController::class, 'checkSlug'])
       ->middleware('auth');
Route::resource('/dashboard/profil',ProfilController::class)->middleware('auth');

Route::get('/dashboard/author',[AuthorController::class,'index'])->middleware('admin');
Route::get('/dashboard/author/{users::slug}',[AuthorController::class,'show'])->middleware('admin');



