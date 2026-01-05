<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller {
    public function index() {
        $data['pokedexs'] = Pokedex::all();
        return view('pokedexs.index', $data);
    }

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
        $p->save();
        return redirect('/pokedex');
    }

    public function update($id) {
        $data['pokedex_update'] = Pokedex::find($id);
        $data['pokedexs'] = Pokedex::all();
        return view('pokedexs.update', $data);
    }

    public function update_action(Request $req, $id) {
        $p = Pokedex::find($id);
        $p->update($req->all()); // วิธีเขียนแบบย่อ
        return redirect('/pokedex');
    }

    public function delete_action($id) {
        Pokedex::destroy($id);
        return redirect('/pokedex');
    }
}
