@extends('layouts.app')

@section('content')
<div class="">
    <div class="mb-2 col">
        <a href="{{route('cars.index')}}" class="btn btn-info btn-block">Lista de Carros</a>
    </div>
    <div class="mb-2 col">
        <a href="{{route('clients.index')}}" class="btn btn-info btn-block">Lista de Clientes</a>
    </div>
    <div class="mb-2 col">
        <a href="{{route('cars.index')}}" class="btn btn-info btn-block">Movimentações</a>
    </div>
</div>
@endsection
