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


});

Route::get('login/{user}', function () {
    return view('admin.admin-main',$user);
})->name('login.admin');




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
