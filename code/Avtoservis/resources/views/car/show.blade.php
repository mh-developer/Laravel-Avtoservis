@extends('layouts.app')

@section('content')

<div class="title m-b-md">
    {{ $car->znamka }} {{ $car->model }}
</div>

<div class="content">
    <ul>
        <li>{{ $car->letnik }}</li>
        <li>{{ $car->opis }}</li>
    </ul>
</div>

@endsection
