@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="jumbotron text-center login_form shadow-lg p-3 my-5 bg-white">
                <div class="title m-b-md">
                    Naroči se na servis
                </div>
                <div>
                    <form action="{{ route('reservations.store') }}" method="post">
                        @csrf

                        <input type="hidden" name="id_uporabnika" value="{{ auth()->id() }}">
                        <input type="hidden" name="is_confirm" value="0">

                        {{-- @if($errors->any())
                            <div class="errors">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}

                        <div class="form-group form-id_storitve">
                            <select class="form-control @error('id_storitve') is-invalid @enderror" id="id_storitve" name="id_storitve" oninput="id_storitveValidacija()">
                                <option value="">Izberite storitev</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id_storitve }}">{{ $service->naziv }}</option>
                                @endforeach
                            </select>

                            @error('id_storitve')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="error">To polje je obvezno</span>
                        </div>
                        <div class="form-group form-id_avtoservis">
                            <select class="form-control @error('id_avtoservis') is-invalid @enderror" id="id_avtoservis" name="id_avtoservis" oninput="id_avtoservisValidacija()">
                                    <option value="">Izberite avtoservis</option>
                                @foreach ($avtoservis as $avts)
                                    <option value="{{ $avts->id_avtoservis }}">{{ $avts->poslovalnica }}</option>
                                @endforeach
                            </select>

                            @error('id_avtoservis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="error">To polje je obvezno</span>
                        </div>
                        <div class="form-group form-id_avtomobila">
                            <select class="form-control @error('id_avtomobila') is-invalid @enderror" id="id_avtomobila" name="id_avtomobila" oninput="id_avtomobilaValidacija()">
                                    <option value="">Izberite avtomobil</option>
                                @foreach ($cars as $car)
                                    <option value="{{ $car->id_avtomobila }}">{{ $car->znamka }} {{ $car->model }}</option>
                                @endforeach
                            </select>

                            @error('id_avtomobila')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="error">To polje je obvezno</span>
                        </div>
                        <div class="form-group form-termin">
                            <input type="text" class="form-control @error('termin') is-invalid @enderror" name="termin" id="termin" placeholder="Termin" value="{{ old('termin') }}" oninput="terminValidacija()">

                            @error('termin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="error">To polje je obvezno</span>
                        </div>
                        <div class="form-group form-dodatni_opis">
                            <textarea name="dodatni_opis" class="form-control @error('dodatni_opis') is-invalid @enderror" id="dodatni_opis" placeholder="Dodatni opis napak" cols="15" rows="5" oninput="dodatni_opisValidacija()">{{ old('dodatni_opis') }}</textarea>

                            @error('dodatni_opis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="error">To polje je obvezno</span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-padding" value="Naroči">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
