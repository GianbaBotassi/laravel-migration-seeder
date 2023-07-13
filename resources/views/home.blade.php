@extends('layouts.layout')


@section('content')
    <main>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Cod.Treno</th>
                    <th scope="col">Compagnia</th>
                    <th scope="col">Vagoni</th>
                    <th scope="col">Data di partenza</th>
                    <th scope="col">Data di arrivo</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">In orario</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->code }}</td>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->carriages }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->in_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
