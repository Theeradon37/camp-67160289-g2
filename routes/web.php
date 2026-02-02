<?php
/* [ไฟล์สรุปการกำหนดเส้นทาง - routes/web.php]
 * ทำหน้าที่: จับคู่ URL ที่ผู้ใช้กรอก เข้ากับ Controller ที่จะประมวลผล */

use Illuminate\Support\Facades\Route;

// [จุดเชื่อมโยงเดิมที่ถูกคอมเม้นต์ไว้]
// Route::get('/', function () {
//     return view('html101'); // เดิมส่งไปที่ไฟล์ html101.blade.php โดยตรง
// });

Route::get('/view2', function(){
    return view('myview2');
});

/* [การเชื่อมโยงกับ MyController]
 * เมื่อเข้า /mycontroller (GET) จะไปที่ Method index และเมื่อส่งฟอร์ม (POST) จะไปที่ process */
Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

/* [การเชื่อมโยงสำคัญกับไฟล์ html101.blade.php]
 * - URL '/' (หน้าแรก):
 * 1. เมื่อ User เข้าหน้าเว็บ (GET /) -> จะเรียก WorkShop Controller ที่ Method 'index'
 * (ซึ่งข้างใน Method index นี้เองที่จะสั่ง return view('html101'))
 * 2. เมื่อ User กดปุ่ม 'บันทึก' ในไฟล์ html101 (POST /) -> จะส่งข้อมูลมาที่ Method 'store' เพื่อบันทึกลงฐานข้อมูล */

Route::get('/', [App\Http\Controllers\WorkShop::class, 'index']);
Route::post('/', [App\Http\Controllers\WorkShop::class, 'store']);

/* [การจัดกลุ่ม Route (Route Grouping)]
 * ใช้ Namespace เพื่อลดการเขียนชื่อ Controller ยาวๆ และจัดการระบบ Flight และ Pokedex (CRUD)
 */
Route::namespace('App\Http\Controllers')->group(function() {
    // กลุ่ม Route ของระบบ Flight (เครื่องบิน)
    Route::get('/flight', 'FlightController@index');
    Route::get('/flight/{id}', 'FlightController@update');
    Route::post('/flight', 'FlightController@store');
    Route::put('/flight/{id}', 'FlightController@update_action');
    Route::delete('/flight/{id}', 'FlightController@delete_action');
});

/* [การจัดกลุ่ม Route (Route Grouping)]
 * ใช้ Namespace เพื่อลดการเขียนชื่อ Controller ยาวๆ และจัดการระบบ Flight และ Pokedex (CRUD)
 */
Route::namespace('App\Http\Controllers')->group(function() {
    // กลุ่ม Route ของระบบ Pokedex (สมุดภาพโปเกมอน)
    Route::get('/pokedex', 'PokedexController@index');
    Route::get('/pokedex/{id}', 'PokedexController@update');
    Route::post('/pokedex', 'PokedexController@store');
    Route::put('/pokedex/{id}', 'PokedexController@update_action');
    Route::delete('/pokedex/{id}', 'PokedexController@delete_action');
});
