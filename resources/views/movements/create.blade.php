@extends('layouts.app')
@section('content')
    <h1>Adicionar Novo Registro</h1>
    <form action="{{route('movements.store')}}" method="post">
        @csrf
        @include('movements._formMovement')
        <div class="form-group">
            <button class="btn btn-success btn-lg" type="submit">Criar Registro</button>
        </div>
    </form>
@endsection
