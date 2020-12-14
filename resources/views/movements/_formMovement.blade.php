@php
    if(isset($movement))
    {
        $car = $cars->find($movement->car_id);
        $client = $clients->find($movement->client_id);
    }
@endphp
<div class="form-group">
    <label for="exampleFormControlSelect1">Placa do Veículo</label>
    <select class="form-control text-uppercase col-sm-6" id="exampleFormControlSelect1" name="car_id" required>
        <option selected value="@if(isset($car->id)){{$car->id}} @endif">@if(isset($car->id)){{$car->plate}} - {{$car->model}} @else {{old('cost')}} @endif</option>
        @foreach($cars as $car)
            <option value="{{$car->id}}">{{$car->plate}} - {{$car->model}} </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Nome do Cliente</label>
    <select class="form-control text-uppercase col-sm-6" id="exampleFormControlSelect1" name="client_id">
        <option selected value="">@if(isset($client->id)){{$client->name}} @else {{old('cost')}} @endif</option>
        @foreach($clients as $client)
            <option value="{{$client->id}}">{{$client->cpf}} - {{$client->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="">Custo</label>
    <input class="form-control col-sm-6" type="text" name="cost" value="@if(isset($movement->id)){{$movement->cost}} @else {{old('cost')}} @endif">
</div>
<div class="form-group">
    <label for="">Receita</label>
    <input class="form-control col-sm-6" type="text" name="recipe" value="@if(isset($movement->id)){{$movement->recipe}} @else {{old('recipe')}} @endif">
</div>
