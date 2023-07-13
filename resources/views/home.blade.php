@extends('layouts.layout')


@section('content')
    <table class="table">
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
            <tr>
                @foreach ($trains as $train)
                    <td>{{ $train->code }}</td>
                @endforeach
            </tr>
        </tbody>
    </table>
@endsection
