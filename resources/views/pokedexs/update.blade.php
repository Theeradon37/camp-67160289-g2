@extends('template.default')

@section('header1', 'Pokedex Data')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            <form action="/pokedex/{{ $pokedex_update->id }}" method="post">
                @csrf
                @method('put')
                <div class="col-12">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" id="name" value="{{ $pokedex_update->name }}">
                </div>
                <div class="col-12">
                    <label for="type">Type</label>
                    <input class="form-control" name="type" id="type" value="{{ $pokedex_update->type }}">
                </div>
                <div class="col-12">
                    <label for="species">Species</label>
                    <input class="form-control" name="species" id="species" value="{{ $pokedex_update->species }}">
                </div>
                <div class="col-12">
                    <label for="hp">HP</label>
                    <input class="form-control" name="hp" id="hp" value="{{ $pokedex_update->hp }}">
                </div>
                <div class="col-12">
                    <label for="image_url">Image URL</label>
                    <input class="form-control" name="image_url" id="image_url" value="{{ $pokedex_update->image_url }}">
                </div>
                <div class="col-12 mt-2">
                    <button class="btn btn-success" type="submit">บันทึก</button>
                    <a href="/pokedex" class="btn btn-secondary">ยกเลิก</a>
                </div>
            </form>
        </div>
        @include('pokedex.table')
    </div>
@endsection
