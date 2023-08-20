<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\RequestCreateEvent;
use App\Models\Complaint;
use App\Models\Event;
use App\Models\User;
use App\Services\EventService;
use App\Models\Category;

class AdminController extends Controller
{

    public function getAdminMainPage() {
        return view('admin.dashboard');
    }

    public function getEventRequestPage() {
        $requests = RequestCreateEvent::paginate(10);
        return view('admin.request', [
            'requests' => $requests
        ]);
    }

    public function getEventRequestDetailPage(RequestCreateEvent $request){
        return view('admin.requestDetail', [
            'request' => $request
        ]);
    }

    public function getEventComplaintPage() {
        $requests = Complaint::get();
        return view('admin.complaint',[
            'requests' => $requests
        ]);
    }

    public function getEventComplaintDetailPage(Event $event) {
        
        return view('admin.complaintDetail', [
            'event' => $event
        ]);

    }

    public function getEventComplaintDetailBehidePage(Event $event) {
        return view('admin.complaintDetailBehide', [
            'event' => $event
        ]);
   
    }


    // public function getEventCategoryCreatePage() {
    //     return view('admin.category_create');
    // }

    public function store(Request $request) //Dependency Injection
    {
        $category_name = $request->get('name');
        if ($category_name == null) {
            return redirect()->back();
        }

        // ตรวจสอบความถูกต้องของข้อมูลที่รับมา
        $request->validate([
            'name' => 'required|string|max:255',
        ]);


        $category = new Category();
        $category->name = $category_name;
        $category->save();
        return redirect()->route('admin.category');
    }

    public function show(Category $category)
    {
        return view('category.show', ['category' => $category]);
    }

    public function storeCategory(Request $request)
{
    $category_name = $request->input('name');

    // ตรวจสอบความถูกต้องของข้อมูลที่รับมา
    $request->validate([
        'name' => 'required|string|max:255', // ตั้งค่า validation rules ตามความต้องการ
    ]);

    // สร้างและบันทึกหมวดหมู่ใหม่
    $category = new Category();
    $category->name = $category_name;
    $category->save();

    return redirect()->route('admin.category_create')->with('success', 'บันทึกหมวดหมู่สำเร็จ');
}

public function getEventCategoryPage() {
    $categories = Category::all(); // ดึงข้อมูลหมวดหมู่ทั้งหมด
    return view('admin.category', [
        'categories' => $categories // ส่งข้อมูลหมวดหมู่ไปยัง View
    ]);
}

public function getEventCategoryCreatePage()
{
    // ตราบเท่าที่เราไม่ต้องการดำเนินการอะไรเพิ่มเติมในหน้านี้
    // เราสามารถให้มันว่างเปล่าได้
    return view('admin.category_create');
}




    
    
    
    
    public function approveEventRequest(Request $request) {
        
        $success = EventService::getEventManager()->approveEventRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }
        
    public function denyEventRequest(Request $request) {

        $success = EventService::getEventManager()->denyEventRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }


    public function removeEventRequest(Request $request) {

        $success = EventService::getEventManager()->removeEventRequest($request);
        if ($success != false) {
            return true;
        }

        return false;
    }

    
    public function approveReportRequest(Request $request) {

        $success = EventService::getEventManager()->approveReportRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }

    public function denyReportRequest(Request $request) {

        $success = EventService::getEventManager()->denyReportRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }

    public function removeReportRequest(Request $request) {

        $success = EventService::getEventManager()->removeReportRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }
}
