<?php

use App\Http\Controllers;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::middleware(['web'])->group(function () {
    
    
    // Landing page
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');



    // Logout page
    Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');



    // Login Page
    Route::controller(LoginController::class)->group(function () {
    
        Route::get('/login', 'getLoginPage')->name('login');
        
        Route::post('/login','login')->name('login');
        
    });



    // Register page
    Route::controller(RegisterController::class)->group(function () {
    
        Route::get('/register','getRegisterFirstPage')->name('register');
    
        Route::post('/register','registerFirstStage')->name('register');
    
        Route::get('/register/info','getRegisterSecondPage')->name('register.info')->middleware('regisinfo');
    
        Route::post('/register/info','registerSecondStage')->name('register.info');
        
    });



    // User page
    Route::middleware(['auth', 'multirole:user'])->group( function () {

        Route::get('/user/main',[UserController::class, 'userPopEvent'])->name('user.main');


    });



    // Admin page
    Route::middleware(['auth', 'multirole:admin'])->group( function () {

        Route::get('/admin/main', [AdminController::class, 'index'])->name('admin.main');
    
    
    });

});










    
Route::get('/test', function(){
    return view('test');
})->name('test');
    



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/getmsg',function(){
    return response()->json(array('msg'=> "I miss you UWU"), 200);
});

Route::post('/user/main',[LoginController::class,'checkUser'])->name('user.user-main');

Route::get('/profile',function(){
    return view('profile');
})->name('profile');


Route::get('/event/main/{event}',[UserController::class, 'getMainEventPage'])->name('event.main.main');

Route::get('/event/{event}',[EventController::class, 'getInfoEventPage'])->name('event.information');
Route::get('/event/infomation/{event}',[EventController::class, 'getInfoEventPage'])->name('event.information');
Route::get('/event/main/infomation/{event}',[EventController::class, 'getInfoEventPageFormMainEvent'])->name('event.main.information');
Route::get('/event/{event}/form',[EventController::class, 'getJoinEventFormPage'])->name('event.form');
Route::get('/user/requestingEvent', function (){
    return view('user.rquestingEvent');
})->name('user.rquestingEvent');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
