<?php

use App\Http\Controllers;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProcessController;
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


    // Auth page
    Route::middleware(['auth'])->group( function () {

        
        // Logout page
        Route::post('/logout',[LogoutController::class, 'logout'])->name('logout');
        Route::post('/logout/session',[LogoutController::class, 'logoutSession'])->name('logout.session');

        // Setting page
        Route::get('/setting', [ProfileController::class,'getSettingPage'])->name('setting');
        Route::post('/setting/password', [ProfileController::class,'changePassword'] )->name('change.password');
        Route::post('/setting/profile', [ProfileController::class,'editProfile'] )->name('edit.profile');
        Route::post('/setting/image', [ProfileController::class,'editImage'] )->name('edit.image');
    
        // User page
        Route::middleware(['multirole:user'])->group( function () {

            Route::get('/user/main',[UserController::class, 'userPopEvent'])->name('user.main');
            Route::get('/event/main/{event}',[UserController::class, 'getMainEventPage'])->name('event.main.main');
            Route::get('/event/infomation/{event}',[EventController::class, 'getInfoEventPage'])->name('event.information');
            Route::get('/event/main/infomation/{event}',[EventController::class, 'getInfoEventPageFormMainEvent'])->name('event.main.information');
            Route::get('/event/{event}/form',[EventController::class, 'getJoinEventFormPage'])->name('event.form');
            Route::get('/user/requestingEvent', function (){
                return view('user.rquestingEvent');
            })->name('user.rquestingEvent');

            Route::get('/event/{event}/kanban', [EventController::class, 'getEventKanbanPage'])->name('event.kanban');

            
        });






        // Admin page
        Route::middleware(['multirole:admin'])->group( function () {
            
            Route::get('/admin/main', [AdminController::class, 'index'
            ])->name('admin.main');

            Route::get('/admin/main-access', function () {
                return view('admin.access');
                })->name("admin-access");

            Route::get('/admin/main-report', function () {
                return view('admin.report');
                })->name("admin-report");
                
            Route::get('/admin/main-ban', function () {
                return view('admin.ban');
                })->name("admin-ban");

            
        
        });

  
    });

    
        
    
    Route::get('/test', function(){
        return view('test');
    })->name('test');


});










    


Route::post('/createProcess', [ProcessController::class,'createProcess'] )->name('create.process');



Route::post('/getmsg',function(){
    return response()->json(array('msg'=> "I miss you UWU"), 200);
});


Route::get('/profile',function(){
    return view('profile');
})->name('profile');




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
