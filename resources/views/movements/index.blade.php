@extends('layouts.app')

@section('content')
<a href="{{route('movements.create')}}" class="btn btn-lg btn-block btn-success my-3"><i class="fas fa-plus-circle"></i> Adicionar Registro</a>
<table class="table table-striped">
    <thead>
        <th>Placa</th>
        <th>Modelo</th>
        <th>Custo</th>
        <th>Receita</th>
        <th>Ações</th>
    </thead>
    <tbody>
        @foreach($movements as $movement)
            <!-- @php
              $car = $movement->find($movement->car_id)->cars;
            @endphp -->
            <tr>
                <td>{{$movement->plate}}</td>
                <td>{{$movement->model}}</td>
                <td>{{$movement->cost}}</td>
                <td>{{$movement->recipe}}</td>
                <td>
                    <!-- <div class="btn-group">
                        <a href="{{route('movements.edit', ['movement' => $movement->car_id])}}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{route('movements.destroy', ['movement' => $movement->car_id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                        </form>
                    </div> -->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
