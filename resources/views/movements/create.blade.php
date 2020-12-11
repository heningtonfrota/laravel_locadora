@extends('layouts.app')
@section('content')
    <h1>Adicionar Novo Registro</h1>
    <form action="{{route('movements.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control col-sm-6" id="exampleFormControlSelect1" name="car_id">
                <option selected disabled value="">Veículo...</option>
                @foreach($cars as $car)
                    <option value="{{$car->id}}">{{$car->model}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select class="form-control col-sm-6" id="exampleFormControlSelect1" name="client_id">
                <option selected disabled value="">Cliente...</option>
                @foreach($clients as $client)
                    <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Custo</label>
                <input class="form-control" type="text" name="cost" value="{{old('cost')}}">
            </div>
            <div class="form-group col-sm-6">
                <label for="">Receita</label>
                <input class="form-control" type="text" name="recipe" value="{{old('recipe')}}">
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-success btn-lg" type="submit">Criar Registro</button>
        </div>
    </form>
@endsection
