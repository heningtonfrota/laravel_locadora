<tbody>
    @foreach($vehicles as $chave => $valor)
        <tr>
            <td>{{$position = $position + 1}}º</td>
            <td>{{$chave}}</td>
            <td>{{$valor}}</td>
        </tr>
    @endforeach
</tbody>
