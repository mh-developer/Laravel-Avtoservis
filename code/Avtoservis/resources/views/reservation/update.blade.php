@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="jumbotron text-center login_form shadow-lg p-3 my-5 bg-white">
                <div class="title m-b-md">
                    Uredi avtomobil
                </div>
                <div>
                    <form action="/cars/{{ $car->id }}" method="post">
                        @method('PATCH')
                        @csrf

                        <div class="form-group">
                            <label for="znamka">Znamka avtomobila</label>
                            <input type="text" class="form-control" name="znamka" id="znamka" value="{{ $car->znamka }}">
                        </div>
                        <div class="form-group">
                            <label for="model">Model avtomobila</label>
                            <input type="text" class="form-control" name="model" id="model" value="{{ $car->model }}">
                        </div>
                        <div class="form-group">
                            <label for="letnik">Leto izdelave</label>
                            <input type="text" class="form-control" name="letnik" id="letnik" value="{{ $car->letnik }}">
                        </div>
                        <div class="form-group">
                            <label for="opis">Opis avtomobila</label>
                            <textarea name="opis" class="form-control" id="opis" cols="30" rows="10">{{ $car->opis }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Popravi">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
