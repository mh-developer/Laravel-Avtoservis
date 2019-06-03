@extends('layouts.app')

@section('navbar')
    @include('partial.navbar')
@endsection

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-8">
                <div>
                    <h1 class="display-4">Opravljeni servisi</h1>
                </div>
                <div id="app">
                    <div v-for="res in reservations.data">
                        <div class="mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">@{{ res.termin }}</h5>
                                    <p class="card-text">@{{ res.dodatni_opis }}</p>

                                    <a href="#" class="btn btn-primary btn-padding">Podrobnosti</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <vue-pagination :pagination="reservations" @paginate="getReservations()" :offset="4"></vue-pagination>
                </div>
            </div>
            <div class="col-md-4">
                <div class="lead mb-3">
                    <h1>Prihajajoči servisi</h1>
                </div>

                <div class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Redni servis</h5>
                            <p class="card-text">With supporting text.</p>
                            {{-- <a href="#" class="btn btn-primary btn-padding">Podrobnosti</a> --}}
                        </div>
                    </div>
                </div>

                <div class="lead mb-3">
                    <h1>Vaši avtomobili</h1>
                </div>
                <div class="mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Avtomobil Audi A5</h5>
                            <p class="card-text">With supporting text.</p>
                            <a href="#" class="btn btn-primary btn-padding">Podrobnosti</a>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>




    {{-- @include('partial.reservation-table') --}}
{{-- </div> --}}
@endsection
