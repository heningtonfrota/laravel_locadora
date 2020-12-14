@extends('layouts.app')

@section('content')
    <div class="container text-center">
      <a href="{{route('clients.create')}}" class="btn btn-lg btn-block btn-success my-3"><i class="fas fa-plus-circle"></i> Adicionar Cliente</a>
      <table class="table table-striped table-sm">
          <thead>
              <th>ID</th>
              <th>C.P.F</th>
              <th>Nome</th>
              <th>Contato</th>
              <th>Alugueis</th>
              <th>Ações</th>
          </thead>
          <tbody class="text-uppercase">
              @foreach($clients as $client)
                  <tr>
                      <td>{{$client->id}}</td>
                      <td>{{$client->cpf}}</td>
                      <td>{{$client->name}}</td>
                      <td>{{$client->mobile_phone}}</td>
                      <td>{{$vehicles[$client->id]}}</td>
                      <td>
                          <div class="btn-group">
                              <a href="{{route('clients.edit', ['client' => $client->id])}}" class="btn btn-sm btn-warning"> <i class="far fa-edit text-white"></i></a>
                              <form action="{{route('clients.destroy', ['client' => $client->id])}}" method="post">
                                  @csrf
                                  @method("DELETE")
                                  <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash text-white"></i></button>
                              </form>
                          </div>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
    </div>
@endsection
