<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//สร้างโดย php artisan make:controller MyController
class MyController extends Controller
{

    function __construct(){
        //
    }
    function index(){
        echo $_GET['num'];
        return $this->MYFUNCTION(); //ใช้ตัวเล็ก หรือตัวใหญ่ทั้งหมดก็ได้
    }
    function myfunction(){  //
        return view('myview.index');
    }
    function process(Request $request){
        // echo $request->input('num');
        $data['mynum'] = $request->input('num');
        return view('myview.process', $data);
    }
}
