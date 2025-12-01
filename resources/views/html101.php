<!-- resourse/views/html101.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <meta charset="utf-8" />
        <title>Webshop</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
    </head>

    <body>
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
                </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-2">
                    <label for="lname" class="fs-5">นามสกุล</label>
                </div>
                <div class="col-4">
                    <input type="text" id="lname" name="lname" class="form-control">
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
                    <select id="gender" name="gender" class="form-control">
                        <option value="">-- กรุณาเลือกเพศ --</option>
                        <option value="male">ชาย</option>
                        <option value="female">หญิง</option>
                        <option value="other">อื่น ๆ</option>
                    </select>
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
                </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-2">
                    <label for="favcolor" class="fs-5">สีที่ชอบ</label>
                </div>
                <div class="col-4">
                    <input type="text" id="favcolor" name="favcolor" class="form-control">
                </div>
            </div>

            <div class="row align-items-center mt-3">
                <div class="col-2">
                    <label for="favgenre" class="fs-5">แนวเพลงที่ชอบ</label>
                </div>
                <div class="col-4">
                    <input type="text" id="favgenre" name="favgenre" class="form-control">
                </div>
            </div>

            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="agree" name="agree" required>
                <label class="form-check-label" for="agree">
                    ยินยอมเงื่อนไขและข้อตกลง
                </label>
            </div>

            <div class="mt-3">
                <button type="reset" class="btn btn-secondary">รีเซ็ต</button>
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>

        </form>

       </div>
    </body>
</html>