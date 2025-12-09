<!-- resourse/views/html101.blade.php -->
@extends('template.default')

    @section('content')
       <div class="container pt-5">     <!-- p(padding) t(top) 5(scale) -->
        <h1>Workshop #HTML - FORM</h1>
            <form action="your-action.php" method="post" enctype="multipart/form-data">

            <style>
                body {
                    font-family: "Sarabun", sans-serif;
                }
            </style>

            <div class="row align-items-center mt-3">
                <div class="col-2">
                    <label for="fname" class="col-form-label fs-5">ชื่อจริง</label>
                </div>
                    <div class="col-4">
                        <input type="text" id="fname" name="fname" class="form-control">
                        <div class="valid-feedback">
                            กรอกข้อมูลถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดกรอกข้อมูล
                        </div>
                    </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-2">
                    <label for="lname" class="fs-5">นามสกุล</label>
                </div>
                <div class="col-4">
                    <input type="text" id="lname" name="lname" class="form-control">
                        <div class="valid-feedback">
                            กรอกข้อมูลถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดกรอกข้อมูล
                        </div>
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
                        <div class="valid-feedback">
                            กรอกข้อมูลถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดกรอกข้อมูล
                        </div>
                </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-2">
                    <label for="favcolor" class="fs-5">สีที่ชอบ</label>
                </div>
                <div class="col-4">
                    <input type="text" id="favcolor" name="favcolor" class="form-control">
                        <div class="valid-feedback">
                            กรอกข้อมูลถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดกรอกข้อมูล
                        </div>
                </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-2">
                    <label for="favgenre" class="fs-5">แนวเพลงที่ชอบ</label>
                </div>
                <div class="col-4">
                    <input type="text" id="favgenre" name="favgenre" class="form-control">
                        <div class="valid-feedback">
                            กรอกข้อมูลถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดกรอกข้อมูล
                        </div>
                </div>
            </div>

            <div class="form-check mt-5" style="margin-left: 150px;">
                <input class="form-check-input ms-5" type="checkbox" id="agree" name="agree" required>
                <label class="form-check-label ms-2" for="agree">
                    ยินยอมเงื่อนไขและข้อตกลง
                </label>
            </div>

            <div class="mt-3" style="margin-left: 350px;">
                <button type="reset" class="btn btn-secondary">รีเซ็ต</button>
                <button type="button" onclick="checkValidate()" class="btn btn-primary">บันทึก</button>
            </div>
            </form>
       </div>
    @endsection

    @push('scripts')
        <script>
            console.log("it's work!")
            checkValidate = () =>{
                let fname = document.getElementById('fname')
                if(fname.value == ""){
                    fname.classList.remove("is-valid")
                    fname.classList.add("is-invalid")
                }else {
                    fname.classList.remove("is-invalid")
                    fname.classList.add("is-valid")
                }

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
