@extends('layouts.layout')

@section('content')

<div class="title m-b-md">
    Uredi Cars
</div>
<div>
    <form action="/cars/{{ $car->id }}" method="post">
        @method('PATCH')
        @csrf

        <div class="form-control">
            <label for="znamka">Znamka avtomobila</label>
            <input type="text" name="znamka" id="znamka" value="{{ $car->znamka }}">
        </div>
        <div class="form-control">
            <label for="model">Model avtomobila</label>
            <input type="text" name="model" id="model" value="{{ $car->model }}">
        </div>
        <div class="form-control">
            <label for="letnik">Leto izdelave</label>
            <input type="text" name="letnik" id="letnik" value="{{ $car->letnik }}">
        </div>
        </div>
        <div class="form-control">
            <label for="opis">Opis avtomobila</label>
            <textarea name="opis" id="opis" cols="30" rows="10">{{ $car->opis }}</textarea>
        </div>
        <div class="form-control">
            <input type="submit" value="Popravi">
        </div>
    </form>
</div>

@endsection
