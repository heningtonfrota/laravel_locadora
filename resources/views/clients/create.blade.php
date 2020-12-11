@extends('layouts.app')
@section('content')
    <h1>Criar Novo Cliente</h1>
    <form action="{{route('clients.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Nome do Cliente</label>
                <input class="form-control" type="text" name="name" value="{{old('name')}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-sm-6">
                <label for="">C.P.F</label>
                <input class="form-control" type="text" name="cpf" value="{{old('cpf')}}" maxlength="11">
            </div>
        </div>
          <div class="row">
            <div class="form-group col-sm-6">
                <label for="">Contato Telefonico</label>
                <input id="mobile_phone" class="mobile_phone form-control" type="text" name="mobile_phone" value="{{old('mobile_phone')}}" maxlength="11">
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-success btn-lg" type="submit">Criar Cliente</button>
        </div>
    </form>
@endsection
