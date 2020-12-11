@extends('layouts.app')
@section('content')
    <h1>Adicionar Novo Veiculo</h1>
    <form action="{{route('cars.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Placa</label>
                <input class="form-control" type="text" name="plate" value="{{old('plate')}}" maxlength="7">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Cor</label>
                <input class="form-control" type="text" name="color" value="{{old('color')}}">
            </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6">
              <label for="">Modelo</label>
              <input class="form-control" type="text" name="model" value="{{old('model')}}">
          </div>
        </div>
        <div class="row">
          <div class="form-group col-sm-6">
              <label for="">Ano</label>
              <input class="form-control" type="text" name="year" value="{{old('year')}}" maxlength="4">
          </div>
        </div>
        <div class="form-group">
            <button class="btn btn-success btn-lg" type="submit">Adicionar Veiculo</button>
        </div>
    </form>
@endsection
