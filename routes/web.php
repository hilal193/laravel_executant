<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\GallerieController;
use App\Http\Controllers\CategorieController;

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
    return view('home');
})->name('home');

Route::get('/', [HomeController::class,"index"])->name("home");



// Route::get('/dashboard', function () {
    //     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', [FrontController::class,"home"])->name("home");

Route::get('/admin/dashboard', [FrontController::class,"admin"])->middleware("auth")->name("dashboard");

require __DIR__.'/auth.php';



// user

// create
route::get("/admin/users/create",[UserController::class,"create"])->name("users.create");
// store
route::post("/admin/users/store",[UserController::class,"store"])->name("users.store");
// affiche
route::get("/admin/users/index",[UserController::class,"index"])->name("users.index");
// del
Route::delete('/users/{id}/deleteusers', [UserController::class,"destroy"])->name("users.destroy");
// show
route::get("/admin/{users}/showindex",[UserController::class,"show"])->name("users.show");
// edit
route::get("/admin/{users}/editindex",[UserController::class,"edit"])->name("users.edit");
// update
route::put("/admin/{users}/updateindex",[UserController::class,"update"])->name("users.update");



// avatar

// create
route::get("/admin/avatars/create",[AvatarController::class,"create"])->name("avatars.create");
// store
route::post("/admin/avatars/store",[AvatarController::class,"store"])->name("avatars.store");
// affiche
route::get("/admin/avatars/index",[AvatarController::class,"index"])->name("avatars.index");
// del
Route::delete('/avatars/{avatars}/deleteavatars', [AvatarController::class,"destroy"])->name("avatars.destroy");
// show
route::get("/admin/{avatars}/showindex",[AvatarController::class,"show"])->name("avatars.show");
// edit
route::get("/admin/{avatars}/editindex",[AvatarController::class,"edit"])->name("avatars.edit");
// update
route::put("/admin/{avatars}/updateindex",[AvatarController::class,"update"])->name("avatars.update");
// download
route::get("/admin/avatar/{avatars}/download",[AvatarController::class,"download"])->name("avatars.download");
// url store
route::post("/admin/avatarsurl/store",[AvatarController::class,"storeUrl"])->name("avatars.url.store");



// image

// create
route::get("/admin/images/create",[ImageController::class,"create"])->name("images.create");
// store
route::post("/admin/images/store",[ImageController::class,"store"])->name("images.store");
// affiche
route::get("/admin/images/index",[ImageController::class,"index"])->name("images.index");
// del
Route::delete('/images/{id}/deleteimages', [ImageController::class,"destroy"])->name("images.destroy");
// show
route::get("/admin/{images}/showindex",[ImageController::class,"show"])->name("images.show");
// edit
route::get("/admin/{images}/editindex",[ImageController::class,"edit"])->name("images.edit");
// update
route::put("/admin/{images}/updateindex",[ImageController::class,"update"])->name("images.update");
// download
route::get("/admin/{images}/download",[ImageController::class,"download"])->name("images.download");
// url store
route::post("/admin/imagesurl/store",[ImageController::class,"storeUrl"])->name("images.url.store");


// categories

// create
route::get("/admin/categories/create",[CategorieController::class,"create"])->name("categories.create");
// store
route::post("/admin/categories/store",[CategorieController::class,"store"])->name("categories.store");
// affiche
route::get("/admin/categories/index",[CategorieController::class,"index"])->name("categories.index");
// del
Route::delete('/categories/{categories}/deletecategories', [CategorieController::class,"destroy"])->name("categories.destroy");
// show
route::get("/admin/{categories}/showindex",[CategorieController::class,"show"])->name("categories.show");
// edit
route::get("/admin/{categories}/editindex",[CategorieController::class,"edit"])->name("categories.edit");
// update
route::put("/admin/{categories}/updateindex",[CategorieController::class,"update"])->name("categories.update");
// download
route::get("/admin/{categories}/download",[CategorieController::class,"download"])->name("categories.download");
// url store
route::post("/admin/categoriesurl/store",[CategorieController::class,"storeUrl"])->name("categories.url.store");

// affiche
route::get("/admin/dashboard/index",[FrontController::class,"admin"])->name("admin.index");




// gallerie

// store
route::post("/admin/galleries/store",[GallerieController::class,"store"])->name("galleries.store");
// affiche
route::get("/admin/galleries/index",[GallerieController::class,"index"])->name("galleries.index");
// del
Route::delete('/images/{id}/deletegalleries', [GallerieController::class,"destroy"])->name("galleries.destroy");
// show
route::get("/admin/{galleries}/showindex",[GallerieController::class,"show"])->name("galleries.show");
// edit
route::get("/admin/{galleries}/editindex",[GallerieController::class,"edit"])->name("galleries.edit");
// update
route::put("/admin/{galleries}/updateindex",[GallerieController::class,"update"])->name("galleries.update");
// download
route::get("/admin/{galleries}/download",[GallerieController::class,"download"])->name("galleries.download");
// url store
route::post("/admin/galleriesurl/store",[GallerieController::class,"storeUrl"])->name("galleries.url.store");



