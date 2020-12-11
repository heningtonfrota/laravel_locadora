@extends('layouts.app')
@section('content')
    <h1>Atualizar Dados do Cliente: <strong><u>{{$client->name}}</u></strong></h1>
    <form action="{{route('clients.update', ['client' => $client->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Nome do Cliente</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$client->name}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">C.P.F</label>
                <input class="form-control @error('cpf') is-invalid @enderror" type="text" name="cpf" value="{{$client->cpf}}">
            </div>
        </div>
          <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Contato Telefonico</label>
                <input id="mobile_phone" class="mobile_phone form-control @error('mobile_phone') is-invalid @enderror" type="number" name="mobile_phone" value="{{$client->mobile_phone}}">
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-success col-sm-2 btn-lg float-left" type="submit">Atualizar Dados</button>
            <a href="{{route('clients.index')}}" class="btn btn-danger col-sm-2 btn-lg float-right">Voltar</a>
        </div>
    </form>
@endsection
