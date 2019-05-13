@extends('layouts.layout')

@section('content')

<div class="title m-b-md">
    Add Cars
</div>
<div>
    <form action="/cars" method="post">
        @csrf

        <div class="form-control">
            <label for="znamka">Znamka avtomobila</label>
            <input type="text" name="znamka" id="znamka" value="{{ old('znamka') }}">
        </div>
        <div class="form-control">
            <label for="model">Model avtomobila</label>
            <input type="text" name="model" id="model" value="{{ old('model') }}">
        </div>
        <div class="form-control">
            <label for="letnik">Leto izdelave</label>
            <input type="number" name="letnik" id="letnik" value="{{ old('letnik') }}">
        </div>
        </div>
        <div class="form-control">
            <label for="opis">Opis avtomobila</label>
            <textarea name="opis" id="opis" cols="30" rows="10">{{ old('opis') }}</textarea>
        </div>
        <div class="form-control">
            <input type="submit" value="Dodaj">
        </div>

        @if($errors->any())
            <div class="errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>

@endsection
