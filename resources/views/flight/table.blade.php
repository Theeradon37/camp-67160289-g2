<div class="mt-3 col-12">
    {{-- [ส่วนหัวของตาราง - Table Header] --}}
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>airline</td>
                <td>number of planes</td>
                <td>price per ticket</td>
                <td>tools</td> {{-- คอลัมน์สำหรับปุ่มจัดการข้อมูล --}}
            </tr>
        </thead>
        <tbody>
            {{--
                [การวนลูปแสดงผลข้อมูล]
                - $flights: ตัวแปร Array หรือ Collection ที่ถูกส่งมาจาก FlightController
                - @foreach: วนลูปเพื่อนำข้อมูลเครื่องบินแต่ละลำออกมาแสดงผลในแต่ละแถว (<tr>)
            --}}
            <?php foreach($flights as $flight){?>
            <tr>
                {{-- [การแสดงค่าข้อมูล] - ดึงค่าจาก Object $flight ซึ่งชื่อคอลัมน์ต้องตรงกับไฟล์ Migration --}}
                <td>{{ $flight->id }}</td>
                <td>{{ $flight->name }}</td>
                <td>{{ $flight->airline }}</td>
                <td>{{ $flight->number_of_planes }}</td>
                <td>{{ $flight->price_per_ticket }}</td>

                <td>
                    {{--
                        [ปุ่มแก้ไข (Edit Link)]
                        - เชื่อมโยงกับ Route: Route::get('/flight/{id}', ...) ในไฟล์ web.php
                        - ส่ง ID ของเที่ยวบินแนบไปกับ URL เพื่อให้ Controller รู้ว่าจะแก้ไขลำไหน
                    --}}
                    <a class="btn btn-warning" href="/flight/{{ $flight->id }}">
                        แก้ไข
                    </a>

                    {{--
                        [ฟอร์มการลบข้อมูล (Delete Form)]
                        - action: ส่งไปที่ Route::delete('/flight/{id}', ...)
                        - @csrf: ป้องกันความปลอดภัยตามมาตรฐาน Laravel
                        - @method('delete'): เป็นการหลอก Browser ว่านี่คือคำสั่ง DELETE (เพราะ HTML Form ปกติรับได้แค่ GET/POST)
                    --}}
                    <form action="/flight/{{ $flight->id }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">ลบ</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
