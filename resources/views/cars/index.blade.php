<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Lista de Carros</title>
  </head>
  <body>
    <div class="container">
      <a href="{{route('cars.create')}}" class="btn btn-lg btn-block btn-success my-3"><i class="fas fa-plus-circle"></i> Adicionar Carro</a>
      <table class="table table-striped">
          <thead>
              <th>ID</th>
              <th>Placa</th>
              <th>Cor</th>
              <th>Modelo</th>
              <th>Ano</th>
              <th>Ações</th>
          </thead>
          <tbody>
              @foreach($cars as $car)
                  <tr>
                      <td>{{$car->id}}</td>
                      <td>{{$car->plate}}</td>
                      <td>{{$car->color}}</td>
                      <td>{{$car->model}}</td>
                      <td>{{$car->year}}</td>
                      <td>
                          <div class="btn-group">
                              <a href="{{route('cars.edit', ['car' => $car->id])}}" class="btn btn-sm btn-warning">Editar</a>
                              <form action="{{route('cars.destroy', ['car' => $car->id])}}" method="post">
                                  @csrf
                                  @method("DELETE")
                                  <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                              </form>
                          </div>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </body>
</html>
