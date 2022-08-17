<?php
$nombre = "";
$nombre2 = "";
$ventas = 0;
$factura = 0;
$descuento = 0;
$mensaje = "";
$total = 0;
if (isset($_POST['enviar'])) {
    $nombre =  ($_POST['nombre']);
    $nombre2 =  ($_POST['nombre2']);
    $ventas = floatval ($_POST['ventas']);
    $factura =  ($_POST['factura']);
    $fecha =  floatval ($_POST['fecha']);
    
if($ventas > 0 && $ventas < 100){
    $mensaje = "<div class='alert alert-danger' role='alert'>No tiene ningun descuento</div>";
   
}else if($ventas >= 100 && $ventas <= 500) {
    $descuento = $ventas * 0.15;
    $mensaje = "<div class='alert alert-danger' role='alert'>Tiene un descuento del 15%</div>";
    
}else if ($ventas > 500 && $ventas <= 1000){
    $descuento = $ventas * 0.20;
    $mensaje = "<div class='alert alert-danger' role='alert'>Tiene un descuento del 20%</div>";
}else if($ventas > 1000) {
    $mensaje = "<div class='alert alert-danger' role='alert'>Tiene un descuento del 30%</div>";
    $descuento = $ventas * 0.30;
}else{
    $mensaje = "<div class='alert alert-danger' role='alert'>No aplica</div>";
}

 $total = $ventas - $descuento;

    
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>selectiva</title>
</head>

<body>
    <div class="alert alert-danger" role="alert">
        EJEMPLO 7
    </div>
    <div class="container">
        <form method="POST" action="ejemplo7.php">
        <div class="form-group">
                <label for="">Nombre del vendedor:</label>
                <input type="text" class="form-control" placeholder="ingrese su Nombre" name="nombre">
            </div>
        <div class="form-group">
                <label for="">Nombre del cliente:</label>
                <input type="text" class="form-control" placeholder="ingrese su nombre" name="nombre2">
            </div>
            <div class="form-group">
                <label for="">Codigo de factura:</label>
                <input type="text" class="form-control" placeholder="ingrese el numero de su factura" name="factura">
            </div>
            <div class="form-group">
                <label for="">Fecha de factura:</label>
              <input type="date" name="fecha" id="" class = "form-control">
            </div>
            <div class="form-group">
                <label for="">suma de ventas:</label>
                <input type="number" class="form-control" placeholder="ingrese la suma de las ventas" name="ventas">
            </div>


            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">
            <table class="table table-hover">
                <tr>
                    <th>Nombre del empleado</th>
                    <th>Nombre cliente</th>
                    <th>Codigo de factura</th>
                    <th>Ventas</th>
                    <th>Descuentos %</th>
                    <th>Total a pagar</th>


                </tr>
                <tr>
                    <td><?php echo $nombre;?></td>
                    <td><?php echo $nombre2;?></td>
                    <td><?php echo $factura;?></td>
                    <td>$<?php echo $ventas;?></td>
                    <td>$<?php echo $descuento;?></td>
                    <td><?php echo $total;?></td>
                </tr>
            </table>
            <h2><?php echo $mensaje;?></h2>
        </div>
    </div>
</body>

</html>