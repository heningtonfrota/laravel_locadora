<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/37f525ac36.js" crossorigin="anonymous"></script>
    <title>Locadora de Veículos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <a class="navbar-brand" href="{{route('welcome')}}">Locadora</a>
        <div class="mr-3">
            <ul class="navbar-nav">
                <li>
                    <a href="{{route('cars.index')}}" class="btn btn-link text-white">Lista de Carros</a>
                </li>
                <li>
                    <a href="{{route('clients.index')}}" class="btn btn-link text-white">Lista de Clientes</a>
                </li>
                <li>
                    <a href="{{route('movements.index')}}" class="btn btn-link text-white">Movimentações</a>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Relatórios
            </a>

            <div class="dropdown-menu"  style="width: 30em;" aria-labelledby="dropdownMenuLink">
                <a href="{{route('reports.cost_recipe_day')}}" class="btn btn-info btn-block">Relatório de custo e receita com saldo diário</a>
                <a href="{{route('reports.higher_revenue_vehicles')}}" class="btn btn-info btn-block">Relatório dos 10 veículos que deram maior receita</a>
                <a href="{{route('reports.higher_cost_vehicles')}}" class="btn btn-info btn-block">Relatório dos 10 veículos que deram o maior custo</a>
                <a href="{{route('reports.most_rented_customers')}}" class="btn btn-info btn-block"> 10 clientes que mais alugaram veículos na locadora</a>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    @yield('scripts')
</body>
</html>
