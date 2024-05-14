<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Satrio Adi Wibowo",
        "email" => "satrioaw3004@gmail.com",
        "image" => "Foto Satrio.jpg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);
// Halaman Single Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/profile', [DashboardProfileController::class, 'index'])->name('profile.index');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/profile/{id}/edit', [DashboardProfileController::class, 'edit'])->name('profile.edit');
});
Route::middleware(['auth'])->group(function () {
    Route::put('/dashboard/profile/{id}', [DashboardProfileController::class, 'update'])->name('profile.updates');
});

//Route::resource('/dashboard/profile', DashboardProfileController::class)->middleware('auth');
// Route::get('/dashboard/profile', [DashboardProfileController::class, 'profile'])->name('dashboard.profile');
// Route::get('/dashboard/profile/edit', [DashboardProfileController::class, 'edit'])->name('edit');
// Route::patch('/dashboard/profile/edit', [DashboardProfileController::class, 'update'])->name('update');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post By Author : $author->name",
//         'active' => 'author',
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });