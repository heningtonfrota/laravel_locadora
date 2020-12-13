@php
    if(isset($movement))
    {
        $car = $cars->find($movement->car_id);
        $client = $clients->find($movement->client_id);
    }
@endphp
<div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control col-sm-6" id="exampleFormControlSelect1" name="car_id" required>
        <option selected disabled value="">@if(isset($car->id)){{$car->plate}} @else {{old('cost')}} @endif</option>
        @foreach($cars as $car)
            <option value="{{$car->id}}">{{$car->plate}}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control col-sm-6" id="exampleFormControlSelect1" name="client_id">
        <option selected disabled value="">@if(isset($client->id)){{$client->name}} @else {{old('cost')}} @endif</option>
        @foreach($clients as $client)
            <option value="{{$client->id}}">{{$client->name}}</option>
        @endforeach
    </select>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <label for="">Custo</label>
        <input class="form-control" type="text" name="cost" value="@if(isset($movement->id)){{$movement->cost}} @else {{old('cost')}} @endif">
    </div>
    <div class="form-group col-sm-6">
        <label for="">Receita</label>
        <input class="form-control" type="text" name="recipe" value="@if(isset($movement->id)){{$movement->recipe}} @else {{old('recipe')}} @endif">
    </div>
</div>
