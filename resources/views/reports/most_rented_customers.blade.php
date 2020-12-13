@extends('layouts.app')

@section('content')
<table class="table table-sm text-uppercase text-center">
    <thead class="table-dark">
        <tr>
            <th>Posição</th>
            <th>Cliente</th>
            <th>Aluguéis</th>
        </tr>
    </thead>
    @include('reports._tbody')
</table>
@endsection
