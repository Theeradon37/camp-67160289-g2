<div class="mt-3 col-12">
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>type</td>
                <td>species</td>
                <td>hp</td>
                <td>image</td>
                <td>tools</td>
            </tr>
        </thead>
        <tbody>
            @foreach($pokedexs as $pokedex)
            <tr>
                <td>{{ $pokedex->id }}</td>
                <td>{{ $pokedex->name }}</td>
                <td>{{ $pokedex->type }}</td>
                <td>{{ $pokedex->species }}</td>
                <td>{{ $pokedex->hp }}</td>
                <td><img src="{{ $pokedex->image_url }}" width="50"></td>
                <td>
                    <a class="btn btn-warning" href="/pokedex/{{ $pokedex->id }}">
                        แก้ไข
                    </a>
                    <form action="/pokedex/{{ $pokedex->id }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">ลบ</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

