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
                        <form action="/cars/{{ $car->id_avtomobila }}" method="post">
                            @method('PATCH')
                            @csrf

                            <input type="hidden" name="id_uporabnika" value="{{ auth()->id() }}">
                            <input type="hidden" name="is_active" value="1">

                            {{-- @if($errors->any())
                                <div class="errors">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}

                            <div class="form-group form-znamka">
                                <input type="text" class="form-control @error('znamka') is-invalid @enderror" name="znamka" id="znamka" placeholder="Znamka avtomobila" value="{{ $car->znamka }}" oninput="znamkaValidacija()" autofocus>

                                @error('znamka')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="error">To polje je obvezno</span>
                            </div>
                            <div class="form-group form-model">
                                <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" id="model" placeholder="Model avtomobila" value="{{ $car->model }}" oninput="modelValidacija()">

                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="error">To polje je obvezno</span>
                            </div>
                            <div class="form-group form-leto_prve_registracije">
                                <input type="number" class="form-control @error('leto_prve_registracije') is-invalid @enderror" name="leto_prve_registracije" id="leto_prve_registracije" placeholder="Leto izdelave" value="{{ $car->leto_prve_registracije }}" oninput="leto_prve_registracijeValidacija()">

                                @error('leto_prve_registracije')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="error">To polje je obvezno</span>
                            </div>
                            <div class="form-group form-opis">
                                <textarea name="opis" class="form-control @error('opis') is-invalid @enderror" id="opis" placeholder="Opis avtomobila" cols="15" rows="5" oninput="opisValidacija()">{{ $car->opis }}</textarea>

                                @error('opis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="error">To polje je obvezno</span>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-padding" value="Uredi">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
