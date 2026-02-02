<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    {{--[การเชื่อมโยง Title]
        - @yield('title'): รอรับข้อมูลชื่อหัวข้อจากไฟล์ลูก (เช่น html101)
        - หากไฟล์ลูกกำหนด @section('title', 'หน้าแรก') ข้อความจะมาปรากฏที่นี่--}}
    <title>HTML - @yield('title')</title>

    {{-- [การเชื่อมโยง External Assets - Fonts] --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
             rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}" />

    <style>
        body {
            font-family: "Sarabun", sans-serif; /* กำหนดฟอนต์มาตรฐานให้ทุกหน้าที่ใช้ Template นี้ */
        }
    </style>

    @stack('styles')    {{-- @stack('styles'): จุดที่อนุญาตให้ไฟล์ลูก "หย่อน" (push) CSS เฉพาะหน้าเพิ่มเติมลงมาที่ส่วน <head> ได้ --}}
</head>

<body>
    <div class="container">
        <h1>@yield('header1')</h1>

        {{--[จุดเชื่อมโยงเนื้อหาหลัก]
            - @yield('content'): นี่คือ "ช่องว่าง" ที่สำคัญที่สุด
            - โค้ดทั้งหมดที่อยู่ใน @section('content') ของไฟล์ html101 จะถูกนำมาวางแทนที่ตรงนี้--}}
        @yield('content')
    </div>

    {{--[จุดเชื่อมโยง JavaScript]
        - @stack('scripts'): จุดที่ไฟล์ลูก (html101) จะส่ง (push) โค้ด <script> มาวางไว้ท้ายไฟล์- เพื่อให้มั่นใจว่าหน้าจอโหลดเสร็จก่อนที่ JavaScript จะทำงาน--}}
    @stack('scripts')
</body>
</html>
