@extends('template.default')
@section('title', 'My Controller')
@section('header1', "My View")

@section('content')
    {{-- ใน Method = "Post" ข้อมูลที่คุณกรอกในช่องต่าง ๆ (เช่น username, password) จะถูกแพ็ครวมกันไว้ในส่วนที่เรียกว่า
    Message Body ของการส่งข้อมูล HTTP โดยที่ข้อมูลเหล่านี้จะไม่ปรากฏบนแถบที่อยู่ (URL) ของเบราว์เซอร์ --}}

    {{-- "GET" เน้นไปที่การ "ขอข้อมูล" หรือการส่งข้อมูลแบบเปิดเผย --}}

    <form action="#" method="POST">
        @csrf
        <label for="num" > ป้อนข้อมูลแม่สุตรคูณ</label>
        <input type="number" id="num" name="num" class="form-control" name="num">
        <button class="btn btn-success" type="submit">ส่งข้อมูล</button>
    </form>
@endsection
