@extends('layouts.app')

@section('content')
<a href="{{route('cars.create')}}" class="btn btn-lg btn-block btn-success my-3"><i class="fas fa-plus-circle"></i> Adicionar Carro</a>
<table class="table table-striped table-sm text-center">
    <thead>
        <th>ID</th>
        <th>Placa</th>
        <th>Cor</th>
        <th>Modelo</th>
        <th>Ano</th>
        <th>Ações</th>
    </thead>
    <tbody class="text-uppercase">
        @foreach($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->plate}}</td>
                <td>{{$car->color}}</td>
                <td>{{$car->model}}</td>
                <td>{{$car->year}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('cars.edit', ['car' => $car->id])}}" class="btn btn-sm btn-warning"><i class="far fa-edit text-white"></i></a>
                        <form action="{{route('cars.destroy', ['car' => $car->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash text-white"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
