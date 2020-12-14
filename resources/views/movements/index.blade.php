@extends('layouts.app')

@section('content')
<a href="{{route('movements.create')}}" class="btn btn-lg btn-block btn-success my-3"><i class="fas fa-plus-circle"></i> Adicionar Registro</a>
<table class="table table-striped table-sm text-center">
    <thead>
        <th>Order Nº</th>
        <th>Placa</th>
        <th>Modelo</th>
        <th>Cliente</th>
        <th>Custo</th>
        <th>Receita</th>
        <th>Data</th>
        <th>Ações</th>
    </thead>
    <tbody class="text-uppercase">
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
                <td>R$ {{number_format($movement->cost, 2, ',', '.')}}</td>
                <td>R$ {{number_format($movement->recipe, 2, ',', '.')}}</td>
                <td>{{\Carbon\Carbon::parse($movement->created_at)->format('d/m/Y') }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('movements.edit', ['movement' => $movement->id])}}" class="btn btn-sm btn-warning"> <i class="far fa-edit text-white"></i></a>
                        <form action="{{route('movements.destroy', ['movement' => $movement->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="p-2">
    {{ $movements->links() }}
</div>
@endsection
