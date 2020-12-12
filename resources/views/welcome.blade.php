@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="mr-4">
            <h1>Registros</h1>
            <hr>
            <div class="mb-2 col">
                <a href="{{route('cars.index')}}" class="btn btn-info btn-block">Lista de Carros</a>
            </div>
            <div class="mb-2 col">
                <a href="{{route('clients.index')}}" class="btn btn-info btn-block">Lista de Clientes</a>
            </div>
            <div class="mb-2 col">
                <a href="{{route('movements.index')}}" class="btn btn-info btn-block">Movimentações</a>
            </div>
        </div>
        <div class="ml-4">
            <h1>Relatório</h1>
            <hr>
            <div class="mb-2 col">
                <a href="{{route('cars.index')}}" class="btn btn-info btn-block">Relatório de custo e receita com saldo diário</a>
            </div>
            <div class="mb-2 col">
                <a href="{{route('cars.index')}}" class="btn btn-info btn-block">Relatório dos 10 veículos que deram maior receita</a>
            </div>
            <div class="mb-2 col">
                <a href="{{route('cars.index')}}" class="btn btn-info btn-block">Relatório dos 10 veículos que deram o maior custo</a>
            </div>
            <div class="mb-2 col">
                <a href="{{route('cars.index')}}" class="btn btn-info btn-block"> 10 clientes que mais alugaram veículos na locadora</a>
            </div>
        </div>
    </div>
@endsection
