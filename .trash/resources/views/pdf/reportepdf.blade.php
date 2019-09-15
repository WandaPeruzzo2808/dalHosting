<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styles -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
   <style>
  body { font-family: DejaVu Sans; }
   </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <img src="images/loguito.png">
  </div>
  <div><p>LISTA DE PRECIOS   -   dalpedidos@gmail.com   -   Tel. 155479-5393   /   2135-5926</p></div>
  <div class="row">
<div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped" table align="center" border="1" style="font-size:8px;">>
          <thead>
            <tr>
               <th>Codigo</th>
               <th>Producto</th>
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
    </div>
    
  </div>
</body>
</html>
