@extends('layouts.app')

@section('content')
<table class="table table-sm">
    <thead class="table-dark">
        <th>Order Nº</th>
        <th>Placa</th>
        <th>Modelo</th>
        <th>Cliente</th>
        <th>Custo</th>
        <th>Receita</th>
        <th>Data</th>
    </thead>
    <tbody>
        @foreach($movements as $movement)
            @php
                $cars = $car->find($movement->car_id);
                $clients = $client->find($movement->client_id);
            @endphp
            <tr>
                <td>{{$movement->id}}</td>
                <td>{{$cars->plate}}</td>
                <td>{{$cars->model}}</td>
                @if(isset($clients->name))
                    <td>{{$clients->name}}</td>
                @else
                    <td></td>
                @endif
                <td>{{$movement->cost}}</td>
                <td>{{$movement->recipe}}</td>
                <td>{{\Carbon\Carbon::parse($movement->created_at)->format('d/m/Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<hr>
<div class="row text-center">
    <div class="col">
        <h2>Custos do Dia</h2>
        <h1>{{$costDay}}</h1>
    </div>
    <div class="col">
        <h2>Receita do Dia</h2>
        <h1>{{$recipeDay}}</h1>
    </div>
    <div class="col">
        <h2>Saldo Diário</h2>
        @if($dailyBalance >= 0)
            <h1 class="bg-success">R$ {{ number_format( $dailyBalance, 2) }}</h1>
        @else
            <h1 class="bg-danger">R$ {{ number_format( $dailyBalance, 2) }}</h1>
        @endif
    </div>
</div>
@endsection
