<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;

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




