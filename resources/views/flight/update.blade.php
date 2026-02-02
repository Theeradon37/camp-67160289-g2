{{--
    [การเชื่อมโยง Template]
    - @extends('template.default'): ใช้โครงสร้างหลักจากไฟล์ default.blade.php ที่คุณส่งมา
    - @section('header1', 'Flight Data'): ส่งข้อความ 'Flight Data' ไปแสดงที่ <h1> ในไฟล์แม่
--}}
@extends('template.default')
@section('header1', 'Flight Data')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            {{-- [การทำงานของฟอร์มแก้ไข]
                - action: ส่งข้อมูลไปที่ URL /flight/{id} ตาม ID ของเที่ยวบินที่กำลังแก้ไข
                - @method('put'): แจ้ง Laravel ว่านี่คือการอัปเดตข้อมูล (Update)
                  ซึ่งจะไปจับคู่กับ Route::put ในไฟล์ web.php --}}
            <form action="/flight/{{ $flight_update->id }}" method="post">
                @csrf
                @method('put')
                <div class="col-12">
                    <label for="name">Name</label>
                    {{-- value="{{ $flight_update->name }}": นำข้อมูลเดิมจาก Controller มาใส่ไว้ในช่อง Input --}}
                    <input class="form-control" name="name" id="name" value="{{ $flight_update->name}}">
                </div>

                <div class="col-12">
                    <label for="airline">Airline</label>
                    <input class="form-control" name="airline" id="airline" value="{{ $flight_update->airline }}">
                </div>

                <div class="col-12">
                    <label for="number_of_planes">Number of Planes</label>
                    <input class="form-control" name="number_of_planes" id="number_of_planes" value="{{ $flight_update->number_of_planes }}">
                </div>

                <div class="col-12">
                    <label for="price_per_ticket">Price per Ticket</label>
                    <input class="form-control" name="price_per_ticket" id="price_per_ticket" value="{{ $flight_update->price_per_ticket }}">
                </div>

                <div class="col-12">
                    <button class="btn btn-success" type="submit">บันทึก</button>
                </div>
            </form>
        </div>

        {{--
            [การเชื่อมโยง Component]
            - @include('flight.table'): เป็นการดึงโค้ดจากไฟล์อื่น (ในที่นี้คือไฟล์ตาราง t<thead> <tr> <td> ที่คุณเพิ่งส่งมา)
              มาแสดงผลต่อท้ายฟอร์มทันที เพื่อให้เห็นรายการข้อมูลทั้งหมดในหน้าเดียว
        --}}
        @include('flight.table')
    </div>
@endsection
