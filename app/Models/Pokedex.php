<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    // บรรทัดนี้จะบอก Laravel ว่า "ไม่ต้องเดาชื่อตาราง ให้ใช้ชื่อนี้เลย"
    protected $table = 'pokedexs';
    protected $guarded = [];
}

