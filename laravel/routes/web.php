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
use App\Models\Event;


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
            Route::post('/event/main/{event}/createAn',[EventController::class, 'createAn'])->name('event.create.an');
            Route::post('/event/main/{announce}/{event}/editAn',[EventController::class, 'editAn'])->name('event.edit.an');
            Route::post('/event/main/removeAn',[EventController::class, 'removeAn'])->name('event.remove.an');


            Route::get('/event/infomation/{event}',[EventController::class, 'getInfoEventPage'])->name('event.information');
            Route::get('/event/main/infomation/{event}',[EventController::class, 'getInfoEventPageFormMainEvent'])->name('event.main.information');
            Route::get('/event/{event}/form',[EventController::class, 'getJoinEventFormPage'])->name('event.formJoinEvent');
            Route::get('/event/{event}/kanban', [ProcessController::class, 'getEventKanbanPage'])->name('event.kanban');
            Route::get('/event/{event}/kanban/{process}', [ProcessController::class, 'getEventKanbanTeamPage'])->name('event.kanban.team');
            Route::post('/event/{process}/kanban/{team}/{event}', [ProcessController::class, 'editKanbanTeam'])->name('event.kanban.edit');
            Route::get('/user/viewAll/NewEvents', [UserController::class, 'userViewAllNewEvents'])->name('user.viewAll.newEvents');
            Route::get('/user/viewAll/upcomingEvents', [UserController::class, 'userViewAllUpComingEvent'])->name('user.viewAll.upcomingEvents');

            Route::post('/editPublish', [EventController::class, 'editPublistEvent'])->name('publish.event');
            Route::post('/editEvent/{event}', [EventController::class, 'editEventInformation'])->name('edit.event.info');
            Route::post('/eventSuspicious', [EventController::class, 'reportEvent'])->name('report.event');

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
            Route::post('/event/{event}/image', [EventController::class,'editImage'] )->name('event.image');

            //RequestJoinEvent
            Route::get('/event/{event}/form',[EventController::class, 'getJoinEventFormPage'])->name('event.formJoinEvent');
            Route::post('/event/{event}/form',[EventController::class, 'requestjoinEventMember'])->name('user.requestjoinEventMember.create');

            //RequestJoinStaffEvent
            Route::get('/event/{event}/staff_form',[EventController::class, 'getJoinStaffEventFormPage'])->name('event.staff.formJoinEvent');
            Route::post('/event/{event}/staff_form',[EventController::class, 'requestjoinEventStaff'])->name('user.staff.requestjoinEventStaff.create');
            //Event Staff
            Route::get('/event/main/{event}/member',[EventController::class, 'getEventMembersPage'])->name('event.team.member');
            Route::post('editTeam', [EventController::class, 'editMemberTeam'])->name('event.team.member.edit');

            Route::get('/event/main/{event}/team', [EventController::class, 'getEventTeamsPage'])->name('event.team');
            Route::post('/editEventTeam', [EventController::class, 'editEventTeam'])->name('event.team.edit');
            Route::post('/removeEventTeam', [EventController::class, 'removeEventTeam'])->name('event.team.remove');
            Route::post('/addEventTeam', [EventController::class, 'addEventTeam'])->name('event.team.add');

            Route::get('/event/main/{event}/join', [EventController::class, 'getEventJoinsPage'])->name('event.team.join');
            Route::get('/event/main/{event}/join/{request}', [EventController::class, 'getEventJoinDetailPage'])->name('event.team.joindetail');

            Route::post('/event/request/approve', [EventController::class, 'approveJoinRequest'])->name('event.request.approve');
            Route::post('/event/request/deny', [EventController::class, 'denyJoinRequest'])->name('event.request.deny');
            Route::post('/event/request/remove', [EventController::class, 'removeJoinRequest'])->name('event.request.remove');

            // EventHistory
            Route::get('/user/myEventHistory/participant', [UserController::class, 'getEventInProgress'])->name('user.myEventHistory.inProgress');
            Route::get('/user/myEventHistory/staff', [UserController::class, 'getEventSuccess'])->name('user.myEventHistory.success');
            Route::get('/user/myEventHistory/all', [UserController::class, 'getEventAll'])->name('user.myEventHistory.all');

            // Notify
            Route::get('/user/Notify', [UserController::class, 'getNotify'])->name('user.notify');
            Route::post('/user/Notify/remove', [UserController::class, 'removeNotify'])->name('user.notify.remove');
            
            //my Own Event
            Route::get('/user/myOwnEvent', [UserController::class, 'getEventHeader'])->name('user.myOwnEvent');

        });






        // Admin page
        Route::middleware(['multirole:admin'])->group( function () {
            
            Route::get('/admin/main', [AdminController::class, 'getAdminMainPage'])->name('admin.main');

            Route::get('/admin/request', [AdminController::class, 'getEventRequestPage'])->name("admin.request");
            Route::get('/admin/request/{request}/detail', [AdminController::class, 'getEventRequestDetailPage'])->name('admin.request.detail');
            Route::post('/admin/request/approve', [AdminController::class, 'approveEventRequest'])->name('admin.request.approve');
            Route::post('/admin/request/deny', [AdminController::class, 'denyEventRequest'])->name('admin.request.deny');
            Route::post('/admin/request/delete', [AdminController::class,'removeEventRequest'])->name('remove.eventrequest');
            
            // เพิ่มเส้นทางสำหรับการสร้างหมวดหมู่
            Route::post('/admin/category', [AdminController::class, 'storeCategory'])->name('admin.category.store');
            Route::get('/admin/complaint', [AdminController::class, 'getEventComplaintPage'])->name("admin.complaint");
<<<<<<< HEAD
            Route::get('/admin/category', [AdminController::class, 'getEventCategoryPage'])->name("admin.category");
            Route::get('/admin/category/create', [AdminController::class, 'getEventCategoryCreatePage'])->name("admin.category_create");
            Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');
=======
            Route::get('/admin/complaint/{event}',[AdminController::class, 'getEventComplaintDetailPage'])->name("admin.complaintDetail");
            Route::get('/admin/complaint/{event}/behide',[AdminController::class, 'getEventComplaintDetailBehidePage'])->name("admin.complaintDetail.behide");
>>>>>>> e600cade70c67ccb9b68215e73596fdb9b7abf39

            Route::post('/admin/complaint/approve', [AdminController::class, 'approveReportRequest'])->name('admin.report.approve');
            Route::post('/admin/complaint/deny', [AdminController::class, 'denyReportRequest'])->name('admin.report.deny');
            Route::post('/admin/complaint/delete', [AdminController::class,'removeReportRequest'])->name('remove.reportrequest');
            
            
            
        
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