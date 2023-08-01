<?php

use App\Http\Controllers;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::controller(LoginController::class)->group(function () {

    Route::get('/login', 'getLoginPage')->name('login');

    Route::post('/login','login')->name('login');

    Route::get('login/{user}','getAccountPage')->name('login.user');


});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/test', function(){
    return view('test');
})->name('test');

Route::post('/getmsg',function(){
    return response()->json(array('msg'=> "fuck you"), 200);
});

Route::get('/user/main',function(){
    return view('user.user-main');
})->name('user.user-main');

Route::post('/user/main',[LoginController::class,'checkUser'])->name('user.user-main');

Route::get('/profile',function(){
    return view('profile');
})->name('profile');

Route::get('/register',function(){
    return view('create-account');
})->name('register');





// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

// Manager Routes

Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard');
});  

// Super Admin Routes

Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
  
    Route::get('/super-admin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('super.admin.dashboard');
});
