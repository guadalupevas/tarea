<?php
$n1 = 0;
$n2 = 0;
$n3 = 0;
$examen = 0;
$mensaje = "";
$trabajo = 0;
$pro1 = 0;
$pro2 = 0;
$pro20 = 0;
$pro3 = 0;
$promedio = 0;
$nombre = "";
 if (isset($_POST['enviar'])) {
$n1 = floatval ($_POST["n1"]);
$n2 = floatval ($_POST["n2"]);
$n3 = floatval ($_POST["n3"]);
$exa = floatval ($_POST["exa"]);
$trabajo = floatval ($_POST["trabajo"]);
$nombre =  ($_POST["nombre"]);
$pro1 = ($n1 + $n2 + $n3) / 3;
$pro20 = $pro1 * 0.55;
$pro2 = $exa * 0.30;
$pro3 = $trabajo * 0.15;
$promedio = $pro20 + $pro2 + $pro3;

$mensaje = "<div class='alert alert-danger' role='alert'> Datos procesados </div>";
 }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ejemplo 9</title>
</head>

<body>
    <div class="alert alert-danger" role="alert">
        Selectiva 9
    </div>
    <div class="container">
        <form method="POST" action="index9.php">
        <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" class="form-control" placeholder="ingrese su Nombre..." name="nombre">
            </div>
            <div class="form-group">
                <label for="">Nota 1:</label>
                <input type="number" class="form-control" placeholder="ingrese su nota.." step="0.1" name="n1">
            </div>
            <div class="form-group">
                <label for="">Nota 2:</label>
                <input type="number" class="form-control" placeholder="ingrese su nota.." step="0.1" name="n2">
            </div>
             <div class="form-group">
                <label for="">Nota 3:</label>
                <input type="number" class="form-control" placeholder="ingrese su nota.." step="0.1" name="n3">
            </div>
            <div class="form-group">
                <label for="">Nota examen:</label>
                <input type="number" class="form-control" placeholder="ingrese su nota.." step="0.1" name="examen">
            </div>
            <div class="form-group">
                <label for="">Nota trabajo final:</label>
                <input type="number" class="form-control" placeholder="ingrese su nota.." step="0.1" name="trabajo">
            </div>

            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">

               <table class = "table table-hover ">
                <tr class="btn-danger">
                <th>Nombre</th>
                <th>55% del promedio de sus tres calificaciones parciales.</th>
                <th>30% de la calificación del examen final.</th>
                <th>15% de la calificación de un trabajo final.</th>
                <th>Promedio total.</th>
                </tr>
                <tr>
                <td><?php echo $nombre; ?></td>
                    <td><?php echo number_format($pro20,2); ?></td>
                    <td><?php echo number_format($pro2,2); ?></td>
                    <td><?php echo number_format($pro3,2); ?></td>
                    <td><?php echo number_format($promedio,2); ?></td>
                </tr>
               </table>

        </div>
        <?php echo $mensaje; ?>

    </div>
</body>

</html> 