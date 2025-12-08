@extends('template.default')

@section('content')
    <h1>This is my view</h1>
    <input type="text" id="myinput" value="input text value"/>
    <button onclick="myfunc()">Check1</button>
    <button onclick="myfunc2()">Check2</button>
    <button onclick="myfunc3()">Check3</button>
@endsection

@push('scripts')
    <h1>my view 2</h1>
@endpush

@push('scripts')
    <h1>My view 3</h1>
@endpush

@push('scripts')
    <script>
        myvar = 1;
        let myvar2
        console.log(myvar)
        console.log(myvar2)
    </script>
    <script>
        myvar2 = "My Var 2"
        myvar2 = 2
        console.log(myvar, myvar2)
    </script>
    <script>
        function myfunc(){
            console.log(document.getElementById('myinput').value)
            document.getElementById('myinput').addClass("form-control")
            return
        }
        function myfunc2 = function(){
            console.log('myfunc2 called')
        }

        myfunc3 = () => console.log('myfunc3 called')

        function myfunc4(callback){
            console.log('myfunc4 called')
            callback()
        }
        myfunc4(myfunc3)

        console.log(document.getElementById('myinput').value)
    </script>
@endpush