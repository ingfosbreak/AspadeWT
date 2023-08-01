<?php

use App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
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


Route::group(['middleware' => ['web','auth:user-entry']], function () {

    
    Route::get('/test', function(){
        return view('test');
    })->name('test');
    
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::post('/getmsg',function(){
    return response()->json(array('msg'=> "fuck you"), 200);
});

Route::post('/user/main',[LoginController::class,'checkUser'])->name('user.user-main');

Route::get('/profile',function(){
    return view('profile');
})->name('profile');

Route::get('/register',function(){
    return view('create-account');
})->name('register');

Route::get('/event/main',function(){
    return view('event.main');
})->name('event.main');


Route::get('/admin/main', [TestController::class, 'index'])->name('admin.main')->middleware('auth:user-entry');

Route::get('/user/main',[UserController::class, 'userPopEvent'])->name('user.main')->middleware('auth:user-entry');;




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
