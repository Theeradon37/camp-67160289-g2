@extends('template.default')

@section('header1', 'Pokedex Data')
@section('content')
    <div class="row">
        <div class="mt-3 col-12">
            <form action="{{ url('/pokedex') }}" method="post">
                @csrf

                <div class="row">
                    {{-- Name --}}
                    <div class="col-md-6 mb-3">
                        <label for="name">Name</label>
                        <input class="form-control" name="name" id="name" required>
                    </div>

                    {{-- Type --}}
                    <div class="col-md-6 mb-3">
                        <label for="type">Type</label>
                        <input class="form-control" name="type" id="type" required>
                    </div>

                    {{-- Species --}}
                    <div class="col-md-12 mb-3">
                        <label for="species">Species</label>
                        <input class="form-control" name="species" id="species">
                    </div>

                    {{-- Height & Weight --}}
                    <div class="col-md-6 mb-3">
                        <label for="height">Height (cm)</label>
                        <input type="number" class="form-control" name="height" id="height">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="weight">Weight (kg)</label>
                        <input type="number" class="form-control" name="weight" id="weight">
                    </div>

                    {{-- HP, Attack, Defense (ใช้เลขทศนิยมตาม Migration ที่เป็น double) --}}
                    <div class="col-md-4 mb-3">
                        <label for="hp">HP</label>
                        <input type="number" step="0.1" class="form-control" name="hp" id="hp">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="attack">Attack</label>
                        <input type="number" step="0.1" class="form-control" name="attack" id="attack">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="defense">Defense</label>
                        <input type="number" step="0.1" class="form-control" name="defense" id="defense">
                    </div>

                    {{-- Image URL --}}
                    <div class="col-12 mb-3">
                        <label for="image_url">Image URL</label>
                        <input class="form-control" name="image_url" id="image_url" placeholder="https://...">
                    </div>
                </div>

                <div class="col-12 mt-2">
                    <button class="btn btn-success" type="submit">บันทึกโปเกมอน</button>
                </div>
            </form>
        </div>

        <hr class="mt-5">
        <div class="col-12">
            @include('pokedexs.table')
        </div>
    </div>
@endsection
