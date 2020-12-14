@extends('layouts.app')

@section('content')
<h3 class="text-center text-uppercase">Veículos que deram maior custo</h3>
<hr>
<table class="table table-sm text-uppercase text-center mx-auto col-sm-6">
    <thead class="table-dark">
        <tr>
            <th>Posição</th>
            <th>Placa</th>
            <th>Modelo</th>
            <th>Valor Total</th>
        </tr>
    </thead>
    @include('reports._tbody')
</table>
@endsection
