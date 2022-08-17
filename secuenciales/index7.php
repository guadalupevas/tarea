<?php
$venta1 = 0;
$venta3 = 0;
$venta2 = 0;
$nombre = "";
$sueldo = 0;
$comision = 0;
$sueldot = 0;
$mensaje = "";
 if (isset($_POST['enviar'])) {
$venta1 = floatval ($_POST["venta1"]);
$venta2 = floatval ($_POST["venta2"]);
$venta3 = floatval ($_POST["venta3"]);
$sueldo = floatval ($_POST["sueldo"]);
$nombre =  ($_POST["nombre"]);
 $comision = ($venta1 + $venta2 + $venta3) * 0.10;
 $sueldot = $sueldo + $comision;
$mensaje = "<div class='alert alert-success' role='alert'> Datos procesados </div>";
 }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejemplo 7</title>
</head>

<body>
    <div class="alert alert-danger" role="alert">
        EJEMPLO 7
    </div>
    <div class="container">
        <form method="POST" action="index7.php">
        <div class="form-group">
                <label for="">Nombre Vendedor:</label>
                <input type="text" class="form-control" placeholder="ingrese un nombre.." name="nombre">
            </div>
            <div class="form-group">
                <label for="">Sueldo base:</label>
                <input type="number" class="form-control" placeholder="ingrese su sueldo.." step="0.1" name="sueldo">
            </div>
            <div class="form-group">
                <label for="">Venta 1:</label>
                <input type="number" class="form-control" placeholder="ingrese su venta.." step="0.1" name="venta1">
            </div>
            <div class="form-group">
                <label for="">venta 2:</label>
                <input type="number" class="form-control"placeholder="ingrese su venta.." step="0.1" name="venta2">
            </div>
            <div class="form-group">
                <label for="">venta 3:</label>
                <input type="number" class="form-control" placeholder="ingrese su venta.." step="0.1" name="venta3">
            </div>

            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">
            <table class = "table table-hover ">
                <tr class="btn-danger">
                    <th>Nombre del empleado</th>
                    <th>Sueldo base</th>
                    <th>Comision por cada 3 ventas</th>
                    <th>Sueldo + Comisiones</th>
                </tr>
                <tr>
                <td><?php echo $nombre; ?></td>
                <td><?php echo number_format($sueldo, 2); ?></td>
                <td><?php echo number_format($comision, 2); ?></td>
                <td><?php echo number_format($sueldot, 2); ?></td>
                    </tr>

            </table>

        </div>
        <?php echo $mensaje; ?>
    </div>
</body>

</html> 