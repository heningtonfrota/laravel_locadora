@extends('layouts.app')
@section('content')
    <h1>Atualizar Dados do Registro: <strong><u>{{$movement->model}}</u></strong></h1>
    <hr>
    <form action="{{route('movements.update', ['movement' => $movement->id])}}" method="POST">
        @csrf
        @method('PUT')
        @include('movements._formMovement')
        <div class="form-group">
            <button class="btn btn-success col-sm-2 btn-lg float-left" type="submit">Atualizar Dados</button>
            <a href="{{route('movements.index')}}" class="btn btn-danger col-sm-2 btn-lg float-right">Voltar</a>
        </div>
    </form>
@endsection
