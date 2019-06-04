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

                <div v-for="res in reservations.data">
                    <div class="mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">@{{ res.termin }}</h5>
                                <p class="card-text">@{{ res.dodatni_opis }}</p>

                                <a href="#" class="btn btn-primary btn-padding" data-toggle="modal" :data-target="getCarIdWithHashTag(res.id_avtomobila)">Podrobnosti</a>
                            </div>
                        </div>
                    </div>
                </div>

                <vue-pagination :pagination="reservations" @paginate="getReservations()" :offset="4"></vue-pagination>

        </div>
        <div class="col-md-4">
            {{-- <div class="lead mb-3">
                <h1>Prihajajoči servisi</h1>
            </div>

            <div class="mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Redni servis</h5>
                        <p class="card-text">With supporting text.</p>
                        <a href="#" class="btn btn-primary btn-padding">Podrobnosti</a>
                    </div>
                </div>
            </div> --}}

            <div class="lead mb-3">
                <h1>Vaši avtomobili</h1>
            </div>
            <div class="mb-4" v-for="car in cars">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <h5 class="card-title"><strong>@{{ car.znamka }}</strong> @{{ car.model }} <small>@{{ car.leto_prve_registracije }}</small></h5>
                                <p class="card-text">@{{ car.opis }}</p>
                            </div>
                            <div class="col-md-3">
                                <a :href="updateCar(car.id_avtomobila)" class="btn btn-primary mb-2" title="Podrobnosti" v-tippy><i class="material-icons">add</i></a>
                                <button class="btn btn-danger" title="Izbriši" v-tippy @click="deleteCar(car.id_avtomobila)"><i class="material-icons">remove</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div  v-for="res in reservations.data" class="modal fade" :id="getCarId(res.id_avtomobila)" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Podrobnosti opravljenega servisa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Servis je bil opravljen @{{ res.termin }}</h3>
                <h4>Opravljene storitve</h4>
                <p>
                    @{{ res.dodatni_opis }}
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Zapri</button>
            </div>
        </div>
    </div>
</div>


    {{-- @include('partial.reservation-table') --}}
{{-- </div> --}}
@endsection
