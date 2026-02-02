{{--[การเชื่อมโยงโครงสร้างหลัก]
    - @extends('template.default'): เชื่อมโยงไปดึงโครงสร้างหลัก (Layout) จากไฟล์ resources/views/template/default.blade.php
    - ซึ่งโดยปกติไฟล์ default.blade.php จะทำหน้าที่เรียกใช้ Bootstrap CSS, Google Fonts และจัดวางโครงสร้าง <html>, <head>, <body>--}}
@extends('template.default')

    {{-- @section('content'): กำหนดเนื้อหาที่จะไปแสดงในตำแหน่ง @yield('content') ของไฟล์ Template --}}
    @section('content')
       <div class="container pt-5">     <h1>Workshop #HTML - FORM</h1>

            {{--[การทำงานของ Form]
                - action="/": เมื่อกดปุ่ม Submit ข้อมูลจะถูกส่งไปที่ Route หน้าแรก (เชื่อมโยงกับไฟล์ routes/web.php)
                - method="POST": เป็นวิธีการส่งข้อมูลแบบปกปิด (เหมาะสำหรับฟอร์ม)
                - enctype="multipart/form-data": จำเป็นมาก! เพื่อให้ฟอร์มนี้สามารถอัปโหลดไฟล์ (รูปภาพ) ได้--}}
            <form action="/" method="POST" enctype="multipart/form-data">

                {{-- @csrf: คำสั่งความปลอดภัยของ Laravel เพื่อป้องกันการโจมตีแบบ Cross-Site Request Forgery (จำเป็นต้องใส่ในทุกฟอร์ม POST) --}}
                @csrf

                <style>
                    body {
                        font-family: "Sarabun", sans-serif; /* กำหนดฟอนต์ภาษาไทย เชื่อมโยงกับ Google Fonts ที่อาจจะอยู่ในไฟล์ Template */
                    }
                </style>

                {{-- ส่วนของ input ต่างๆ: มีการใช้ Bootstrap Grid System (row, col) ในการจัดหน้าจอ --}}
                <div class="row align-items-center mt-3">
                    <div class="col-2">
                        <label for="fname" class="col-form-label fs-5">ชื่อจริง</label>
                    </div>
                        <div class="col-4">
                            <input type="text" id="fname" name="fname" class="form-control">
                            {{-- valid/invalid feedback: จะแสดงผลเมื่อมีการเติม Class 'is-valid' หรือ 'is-invalid' ผ่าน JavaScript --}}
                            <div class="valid-feedback">กรอกข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">โปรดกรอกข้อมูล</div>
                        </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-2">
                        <label for="lname" class="fs-5">นามสกุล</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="lname" name="lname" class="form-control">
                            <div class="valid-feedback">กรอกข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">โปรดกรอกข้อมูล</div>
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-2">
                        <label for="bdate" class="fs-5">วัน/เดือน/ปี</label>
                    </div>
                    <div class="col-4">
                        <input type="date" id="bdate" name="bdate" class="form-control">
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-2">
                        <label for="gender" class="fs-5">เพศ</label>
                    </div>
                    <div class="col-4">
                        {{-- Input แบบ Radio: ใช้ name เดียวกัน (gender) เพื่อให้เลือกได้เพียงอย่างเดียว --}}
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male" class="fs-5 me-5">ชาย</label>

                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female" class="fs-5 me-5">หญิง</label>

                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other" class="fs-5 me-5">อื่นๆ</label>
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-2 fs-5">
                        <label for="profile">อัปโหลดรูป</label>
                    </div>
                        <div class="col-4">
                            {{-- accept="image/*": กำหนดให้เลือกได้เฉพาะไฟล์รูปภาพเท่านั้น --}}
                            <input type="file" id="profile" name="profile" class="form-control" accept="image/*">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">อัปโหลด</button>
                        </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-2">
                        <label for="address" class="fs-5">ที่อยู่</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="address" name="address" class="form-control">
                            <div class="valid-feedback">กรอกข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">โปรดกรอกข้อมูล</div>
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-2">
                        <label for="favcolor" class="fs-5">สีที่ชอบ</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="favcolor" name="favcolor" class="form-control">
                            <div class="valid-feedback">กรอกข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">โปรดกรอกข้อมูล</div>
                    </div>
                </div>

                <div class="row align-items-center mt-3">
                    <div class="col-2">
                        <label for="favgenre" class="fs-5">แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col-4">
                        <input type="text" id="favgenre" name="favgenre" class="form-control">
                            <div class="valid-feedback">กรอกข้อมูลถูกต้อง</div>
                            <div class="invalid-feedback">โปรดกรอกข้อมูล</div>
                    </div>
                </div>

                <div class="form-check mt-5" style="margin-left: 150px;">
                    {{-- required: บังคับให้ผู้ใช้ต้องติ๊กถูกก่อนกดส่งฟอร์ม --}}
                    <input class="form-check-input ms-5" type="checkbox" id="agree" name="agree" required>
                    <label class="form-check-label ms-2" for="agree">
                        ยินยอมเงื่อนไขและข้อตกลง
                    </label>
                </div>

                <div class="mt-3" style="margin-left: 350px;">
                    {{-- type="reset": ล้างข้อมูลทั้งหมดในฟอร์มกลับเป็นค่าเริ่มต้น --}}
                    <button type="reset" class="btn btn-secondary">รีเซ็ต</button>

                    {{-- onclick="checkValidate()": เมื่อกดปุ่ม จะเรียกใช้ฟังก์ชัน JavaScript ด้านล่างเพื่อตรวจสอบความถูกต้อง --}}
                    <button type="submit" onclick="checkValidate()" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
       </div>
    @endsection

    @push('scripts')    {{-- ส่งโค้ด JavaScript นี้ไปวางไว้ที่ตำแหน่ง @stack('scripts') ในไฟล์ Template (ส่วนท้ายของ <body>) --}}
        <script>
            console.log("it's work!")
            /* [ส่วนการตรวจสอบข้อมูล (Validation)]
                ฟังก์ชัน checkValidate ทำหน้าที่ตรวจสอบค่าว่างใน Input แต่ละช่อง
                - หากว่าง: ลบ class 'is-valid' (สีเขียว) และเพิ่ม 'is-invalid' (สีแดง)
                - หากไม่ว่าง: ลบ class 'is-invalid' และเพิ่ม 'is-valid'
                *หมายเหตุ: เป็นการตรวจสอบฝั่ง Client-side (หน้าจอ) เท่านั้น */
            checkValidate = () =>{
                /* ชื่อจริง */
                let fname = document.getElementById('fname')
                if(fname.value == ""){
                    fname.classList.remove("is-valid")
                    fname.classList.add("is-invalid")
                }else {
                    fname.classList.remove("is-invalid")
                    fname.classList.add("is-valid")
                }

                /* นามสกุล */
                let lname = document.getElementById('lname')
                if(lname.value == ""){
                    lname.classList.remove("is-valid")
                    lname.classList.add("is-invalid")
                }else {
                    lname.classList.remove("is-invalid")
                    lname.classList.add("is-valid")
                }

                let address = document.getElementById('address')
                if(address.value == ""){
                    address.classList.remove("is-valid")
                    address.classList.add("is-invalid")
                }else {
                    address.classList.remove("is-invalid")
                    address.classList.add("is-valid")
                }

                let favcolor = document.getElementById('favcolor')
                if(favcolor.value == ""){
                    favcolor.classList.remove("is-valid")
                    favcolor.classList.add("is-invalid")
                }else {
                    favcolor.classList.remove("is-invalid")
                    favcolor.classList.add("is-valid")
                }

                let favgenre = document.getElementById('favgenre')
                if(favgenre.value == ""){
                    favgenre.classList.remove("is-valid")
                    favgenre.classList.add("is-invalid")
                }else {
                    favgenre.classList.remove("is-invalid")
                    favgenre.classList.add("is-valid")
                }
            }
        </script>
    @endpush
