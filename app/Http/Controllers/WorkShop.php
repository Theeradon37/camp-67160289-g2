<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WorkShop  extends Controller {
    /* [ฟังก์ชันแสดงหน้าฟอร์ม]
     * การทำงาน: ถูกเรียกใช้งานจาก Route::get('/') ในไฟล์ web.php
     * การเชื่อมโยง: ส่งต่อไปยังฟังก์ชัน myfunction ภายในคลาสเดียวกัน*/
    public function index(){
        return $this->MYFUNCTION();
    }

    /* [การเชื่อมโยงกับ View]
     * การทำงาน: ทำหน้าที่ return หรือสั่งให้แสดงผลหน้าจอ
     * การเชื่อมโยง: เชื่อมกับไฟล์ resources/views/html101.blade.php เพื่อแสดงฟอร์ม Workshop */
    function myfunction(){
        return view('html101');     /* คืนค่าหน้า view -> html101 */
    }

    /* [ฟังก์ชันรับข้อมูลจากฟอร์ม]
     * การทำงาน: ถูกเรียกเมื่อ User กดปุ่ม "บันทึก" (POST /) จากหน้า html101
     * พารามิเตอร์: Request $request ทำหน้าที่ดึงข้อมูลที่ User กรอกในฟอร์มมาใส่ในตัวแปร
     * การเชื่อมโยง:
     * - รับค่าจาก input ที่มี name ว่า 'fname', 'lname', ฯลฯ (จากไฟล์ html101)
     * - ส่งข้อมูลทั้งหมด ($data) ไปแสดงผลที่ไฟล์ resources/views/homework/show.blade.php */

    public function store(Request $request){
        // เก็บข้อมูลจาก Form ลงใน Array $data เพื่อส่งต่อไปยังหน้าถัดไป
        $data['myfname'] = $request->input('fname');
        $data['mylname'] = $request->input('lname');
        $data['mybdate'] = $request->input('bdate');
        $data['mygender'] = $request->input('gender');
        $data['myaddress'] = $request->input('address');
        $data['myfavcolor'] = $request->input('favcolor');
        return view('homework.show', $data);    // สั่งให้เปิดหน้า show.blade.php ในโฟลเดอร์ homework พร้อมส่งค่าใน $data ไปด้วย
    }
}

