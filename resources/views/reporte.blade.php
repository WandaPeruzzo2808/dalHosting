<!DOCTYPE html>
<html lang="es">
    <title>LISTADO DE PEDIDOS DAL - dalpedidos@gmail.com</title>
<head>
</head>
<body>
<table>
    <thead>
    <tr>
    <th>Codigo</th>
    <th>Categoria</th>
    <th>Producto/Reemplazo</th>
    <th>Descripcion</th>
    <th>Cod DIPRA</th>
    <th>Cod GV</th>
    <th>Precio</th>
    <th>Precio U$S</th>
    </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
                <td>{{$producto->codigo}}</td>
                <td>{{$producto->categoria}}</td>
                <td>{{$producto->producto}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->cod_prov1}}</td>
                <td>{{$producto->cod_prov2}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->precio_uss}}</td>
        </tr>
    @endforeach
    </tbody>

</table>
    

</body>
</html>