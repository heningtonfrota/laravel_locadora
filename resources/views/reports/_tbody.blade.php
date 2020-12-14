<tbody>

    @foreach($vehicles as $chave => $valor)
        @if($position <= 9 )
        <tr>
            <td>{{$position = $position + 1}}º</td>
            <td>{{$chave}}</td>
            <td>{{$valor[1]}}</td>
            <td>R$ {{number_format($valor[0], 2, ',', '.')}}</td>
        </tr>
        @endif
    @endforeach
</tbody>
