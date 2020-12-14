@extends('layouts.app')

@section('content')
<h3 class="text-center text-uppercase">Clientes que mais alugaram veículos</h3>
<hr>
<table class="table table-sm text-uppercase text-center mx-auto col-sm-6">
    <thead class="table-dark">
        <tr>
            <th>Posição</th>
            <th>Cliente</th>
            <th>C.P.F</th>
            <th>Aluguéis</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $chave => $valor)
            @if($position <= 9 )
            <tr>
                <td>{{$position = $position + 1}}º</td>
                <td>{{$chave}}</td>
                <td>{{$valor[1]}}</td>
                <td>{{$valor[0]}}</td>
            </tr>
            @endif
        @endforeach
    </tbody>

</table>
@endsection
