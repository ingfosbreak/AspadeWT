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
        
        Route::post('/login','login')->middleware('throttle:login')->name('login');
        
    });


    // Register page
    Route::controller(RegisterController::class)->group(function () {
    
        Route::get('/register','getRegisterFirstPage')->name('register');
    
        Route::post('/register','registerFirstStage')->name('register');
    
        Route::get('/register/info/{userid}','getRegisterSecondPage')->name('register.info')->middleware('regisinfo');
    
        Route::post('/register/info/{userid}','registerSecondStage')->name('register.info');
        
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
            Route::get('/event/{event}/form',[EventController::class, 'getJoinEventFormPage'])->name('event.formJoinEvent');
            Route::get('/user/myEventHistory', function (){return view('user.myEventHistory');})->name('user.myEventHistory');

            Route::get('/event/{event}/kanban', [ProcessController::class, 'getEventKanbanPage'])->name('event.kanban');

            Route::post('/editPublish', [EventController::class, 'editPublistEvent'])->name('publish.event');

            //RequestCreateEvent
            Route::get('/user/requestingEvent', function (){return view('user.formRequestEvent');})->name('user.formRequestEvent');
            Route::post('/user/requestingEvent',[EventController::class,'requestCreateEvent'])->name('user.formRequestEvent.create');
            Route::get('/artists/{artist}/songs',)->name('artists.songs.create');

            // Processes
            Route::post('/createProcess', [ProcessController::class,'createProcess'] )->name('create.process');
            Route::post('/editProcess', [ProcessController::class,'editProcess'] )->name('edit.process');
            Route::post('/updateProcess', [ProcessController::class,'updateProcess'] )->name('update.process');
            Route::post('/removeProcess', [ProcessController::class,'removeProcess'] )->name('remove.process');

            // EventInfo
            Route::post('/createEventInfo', [EventController::class, 'createEventInfo'] )->name('create.info');
            Route::post('/editEventInfo', [EventController::class, 'editEventInfo'] )->name('edit.info');
            Route::post('/updatePosEventInfo', [EventController::class, 'updatePosEventInfo'])->name('updatepos.info');
            Route::post('/typeEventInfo', [EventController::class,'editTypeEventInfo'])->name('type.info');
            Route::post('/removeEventInfo', [EventController::class,'removeEventInfo'])->name('remove.info');

            //RequestJoinEvent
            Route::get('/event/{event}/form',[EventController::class, 'getJoinEventFormPage'])->name('event.formJoinEvent');
            Route::post('/event/{event}/form',[EventController::class, 'requestjoinEventMember'])->name('user.requestjoinEventMember.create');

            //RequestJoinStuffEvent
            Route::get('/event/{event}/stuff_form',[EventController::class, 'getJoinStuffEventFormPage'])->name('event.formJoinEvent');
            Route::post('/event/{event}/stuff_form',[EventController::class, 'requestjoinEventStuff'])->name('user.requestjoinEventStuff.create');
            

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

    
        
    
   

});










    

Route::get('/profile',function(){
    return view('layouts.event');
})->name('profile');





Route::post('/getmsg',function(){
    return response()->json(array('msg'=> "I miss you UWU"), 200);
});







// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
