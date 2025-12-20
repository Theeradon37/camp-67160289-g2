@extends('template.default')
@section('content')
    <h1>Workshop #HTML - FORM (ผลลัพธ์)</h1>
    <ul>
        {{-- ตรวจสอบว่ามีตัวแปรส่งมาหรือไม่ --}}
        @if(isset($myfname))
            <li>ชื่อ: {{$myfname}}</li>
            <li>นามสกุล: {{$mylname}}</li>
            <li>วันเกิด: {{$mybdate}}</li>
            <li>เพศ: {{$mygender}}</li>
            <li>ที่อยู่: {{$myaddress}}</li>
            <li>สีที่ชอบ: {{$myfavcolor}}</li>
        @else
            <li>ไม่พบข้อมูลการส่งฟอร์ม</li>
        @endif
    </ul>
@endsection
