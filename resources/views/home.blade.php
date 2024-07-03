@extends('layouts.app')
@section('title', 'Home')

@section('content')

    <table>
        <tr>
            <th>id</th>
            <th>azienda</th>
            <th>stazione_di_partenza</th>
            <th>stazione_di_arrivo</th>
            <th>orario_di_partenza</th>
            <th>orario_di_arrivo</th>
            <th>codice_treno</th>
            <th>numero_carrozze</th>
            <th>in_orario</th>
            <th>cancellato</th>
            <th>timestamps</th>
        </tr>

        @foreach ($trains as $train)
            <tr>
                <td>{{$train->id}}</td>
                <td>{{$train->azienda}}</td>
                <td>{{$train->stazione_di_partenza}}</td>
                <td>{{$train->stazione_di_arrivo}}</td>
                <td>{{$train->orario_di_partenza}}</td>
                <td>{{$train->orario_di_arrivo}}</td>
                <td>{{$train->codice_treno}}</td>
                <td>{{$train->numero_carrozze}}</td>
                <td>{{$train->in_orario}}</td>
                <td>{{$train->cancellato}}</td>
                <td>{{$train->timestamps}}</td>
            </tr>
        @endforeach
    </table>

@endsection
