@extends('layouts.app')

@section('content')


    <div class="title m-b-md">
        Seznam Cars
    </div>
    <a href="/cars/create">Dodaj avtomobil</a>

    <div>
        <table>

            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->znamka }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->letnik }}</td>
                    <td>{{ $car->opis }}</td>
                    <td><a href="/cars/{{ $car->id }}">Podrobnosti</a></td>
                    <td><a href="/cars/{{ $car->id }}/edit">Uredi</a></td>
                    <td>
                        <form action="/cars/{{ $car->id }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Izbriši</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
