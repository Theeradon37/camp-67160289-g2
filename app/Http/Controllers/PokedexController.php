<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pokedex; // เชื่อมโยงกับ Model Pokedex เพื่อจัดการฐานข้อมูล

class PokedexController extends Controller {
    /* [แสดงรายการทั้งหมด - Read]
     * การทำงาน: ดึงข้อมูลโปเกมอนทั้งหมดจากตาราง pokedexs
     * การเชื่อมโยง: ส่งตัวแปร $pokedexs ไปที่ไฟล์ views/pokedexs/index.blade.php */
    public function index() {
        $data['pokedexs'] = Pokedex::all();
        return view('pokedexs.index', $data);
    }

    /* [เพิ่มข้อมูลใหม่ - Create]
     * การทำงาน: รับค่าจากฟอร์มมาสร้างเป็น Object ใหม่และบันทึกลงฐานข้อมูล
     * การเชื่อมโยง: เมื่อบันทึกเสร็จ จะ redirect (ส่งผู้ใช้) กลับไปที่หน้าหลัก /pokedex */
    public function store(Request $req) {
        $p = new Pokedex;
        $p->name = $req->name;
        $p->type = $req->type;
        $p->species = $req->species;
        $p->height = $req->height;
        $p->weight = $req->weight;
        $p->hp = $req->hp;
        $p->attack = $req->attack;
        $p->defense = $req->defense;
        $p->image_url = $req->image_url;
        $p->save(); // บันทึกข้อมูลลงตาราง
        return redirect('/pokedex');
    }

    /* [แสดงหน้าแก้ไข - Update View]
     * การทำงาน: ค้นหาข้อมูลโปเกมอนตาม $id ที่ส่งมา เพื่อเอาไปแสดงในฟอร์มแก้ไข
     * การเชื่อมโยง: เชื่อมกับไฟล์ views/pokedexs/update.blade.php */
    public function update($id) {
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedexs'] = Pokedex::all(); // ดึงรายการทั้งหมดมาโชว์ในหน้านี้ด้วย
        return view('pokedexs.update', $data);
    }

    /* [ประมวลผลการแก้ไข - Update Action]
     * การทำงาน: หาข้อมูลตัวเดิมตาม $id แล้วอัปเดตค่าใหม่ทั้งหมดที่ส่งมาจากฟอร์ม
     * เทคนิค: $p->update($req->all()) เป็นการเขียนแบบย่อ (Mass Assignment) */
    public function update_action(Request $req, $id) {
        $p = Pokedex::find($id);
        $p->update($req->all());
        return redirect('/pokedex');
    }

    /* [ลบข้อมูล - Delete]
     * การทำงาน: ลบข้อมูลโปเกมอนตาม $id ที่ระบุ
     * การเชื่อมโยง: เชื่อมกับคำสั่ง @method('delete') ในไฟล์หน้า View */
    public function delete_action($id) {
        Pokedex::destroy($id);
        return redirect('/pokedex');
    }
}

