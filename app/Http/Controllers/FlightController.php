<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * ส่วนของ Private Methods (มักใช้ทดสอบภายใน ไม่สามารถเรียกผ่าน URL ได้โดยตรง)
     */
    // ฟังก์ชันสำหรับทดลองเพิ่มข้อมูลแบบกำหนดค่าเอง (Hard-coded)
    private function insert_db()
    {
        $flight = new Flight;
        $flight->name = "Test Insert Flight";
        $flight->airline = "TestAirline";
        $flight->number_of_planes = 10;
        $flight->price_per_ticket = 50.0;
        $flight->save(); // บันทึกลงฐานข้อมูล
    }

    // ฟังก์ชันสำหรับทดลองแก้ไขข้อมูลแถวที่ id เป็น 1
    private function update_db(){
        $flight = Flight::find(1); // ค้นหาข้อมูลที่มี id = 1
        $flight->name = "Test Update Flight";
        $flight->save(); // บันทึกการเปลี่ยนแปลง
    }

    // ฟังก์ชันสำหรับทดลองลบข้อมูลแถวที่ id เป็น 1
    private function delete_db(){
        $flight = Flight::find(1);
        $flight->delete(); // ลบข้อมูลออกจากฐานข้อมูล
    }

    /**
     * ส่วนของ Public Methods (เชื่อมต่อกับ Route เพื่อใช้งานจริง)
     */

    // แสดงรายการเที่ยวบินทั้งหมด
    function index()
    {
        $data['flights'] = Flight::all(); // ดึงข้อมูลทุกแถวจากตาราง flights
        return view('flight.index', $data); // ส่งข้อมูลไปแสดงผลที่ไฟล์ resources/views/flight/index.blade.php
    }

    // บันทึกข้อมูลเที่ยวบินใหม่ที่ส่งมาจาก Form
    function store(Request $req){
        $flight = new Flight;
        $flight->name = $req->input('name'); // รับค่าจาก input ชื่อ 'name'
        $flight->airline = $req->input('airline');
        $flight->number_of_planes = $req->input('number_of_planes');
        $flight->price_per_ticket = $req->input('price_per_ticket');
        $flight->save(); // บันทึกลงฐานข้อมูล

        return redirect('/flight'); // เมื่อบันทึกเสร็จ ให้เปลี่ยนหน้าไปที่ /flight
    }

    // แสดงหน้าแก้ไขข้อมูล พร้อมดึงข้อมูลเดิมมาแสดงในฟอร์ม
    function update($id){
        $data['flight_update'] = Flight::find($id); // หาข้อมูลตัวที่ต้องการแก้ไขตาม ID
        $data['flights'] = Flight::all(); // ดึงข้อมูลทั้งหมดมาด้วย (อาจใช้แสดงรายการข้างล่างฟอร์ม)
        return view('flight.update', $data); // ไปที่หน้าแก้ไข
    }

    // ประมวลผลการแก้ไขข้อมูล (Action การอัปเดต)
    function update_action(Request $req, $id){
        $flight = Flight::find($id); // ค้นหาข้อมูลเดิมตาม ID
        $flight->name = $req->input('name');
        $flight->airline = $req->input('airline');
        $flight->number_of_planes = $req->input('number_of_planes');
        $flight->price_per_ticket = $req->input('price_per_ticket');
        $flight->save(); // บันทึกค่าที่แก้ไขใหม่ลงไป

        return redirect('/flight'); // กลับไปหน้าหลัก
    }

    // ลบข้อมูลเที่ยวบิน
    function delete_action(Request $req, $id){
        $flight = Flight::find($id); // ค้นหาข้อมูลที่ต้องการลบตาม ID
        $flight->delete(); // สั่งลบ

        return redirect('/flight'); // กลับไปหน้าหลัก
    }
}
