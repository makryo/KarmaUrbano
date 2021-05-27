<table>
    <thead>
    <tr>
        <th>Fecha</th>
        <th>cliente_id</th>
        <th>producto_id</th>
    </tr>
    </thead>
    <tbody>
    @foreach($gest as $lista)
        <tr>
            <td>{{ $lista->fecha_venta }}</td>
            <td>{{ $lista->cliente_id }}</td>
            <td>{{ $lista->producto_id }}</td>
        </tr>
    @endforeach
    </tbody>
</table>