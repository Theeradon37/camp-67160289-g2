@extends('template.default')
@section('title', 'My Controller')
@section('header1', "My View")

@section('content')
    <form action="#" method="GET">
        @csrf
        <label for="num" > ป้อนข้อมูลแม่สุตรคูณ</label>
        <input type="number" id="num" name="num" >
        <button class="btn btn-success" type="submit">ส่งข้อมูล</button>
    </form>
@endsection
