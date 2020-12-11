@extends('layouts.app')
@section('content')
    <h1>Atualizar Dados do Cliente: <strong><u>{{$car->model}}</u></strong></h1>
    <hr>
    <form action="{{route('cars.update', ['car' => $car->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Placa do Veiculo</label>
                <input class="form-control" type="text" name="plate" value="{{$car->plate}}" maxlength="7">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Cor</label>
                <input class="form-control" type="text" name="color" value="{{$car->color}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Modelo</label>
                <input class="form-control" type="text" name="model" value="{{$car->model}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Ano</label>
                <input class="form-control" type="number" name="year" value="{{$car->year}}" maxlength="4">
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-success col-sm-2 btn-lg float-left" type="submit">Atualizar Dados</button>
            <a href="{{route('cars.index')}}" class="btn btn-danger col-sm-2 btn-lg float-right">Voltar</a>
        </div>
    </form>
@endsection
