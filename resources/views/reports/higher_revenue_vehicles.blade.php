@extends('layouts.app')

@section('content')
<table class="table table-sm text-uppercase text-center">
    <thead class="table-dark">
        <tr>
            <th>Posição</th>
            <th>Placa</th>
            <th>Valor Total</th>
        </tr>
    </thead>
    @include('reports._tbody')
</table>
@endsection
