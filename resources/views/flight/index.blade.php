@extends('template.default')
@section('header1', 'Flight Data')
@section('content')
    <div class="row"></div>
        <div class="mt-3">
            <form action="/flight" method="POST">
                @crsf
                <div class="col-12">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" id="name">
                </div>

            </form>
        </div>
        <div class="mt-3 col-12">
            <table class="table">

            </table>
        </div>
    </div>
@endsection
