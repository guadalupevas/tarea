<?php
$horas = 0;
$horasex = 0;
$nombre = "";
$total = 0;
if (isset($_POST['enviar'])) {
    $horas = floatval ($_POST['horas']);
    $nombre =  ($_POST['nombre']);
if ($horas <= 40){
$total = $horas * 4;
}else if ($horas > 40){
    $horasex = $horas - 40;
    $total = ($horasex * 6) + (40 * 4);
}
    
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
        EJEMPLO 5
    </div>
    <div class="container">
        <form method="POST" action="ejemplo5.php">
        <div class="form-group">
                <label for="">Ingrese su nombre:</label>
                <input type="text"  class="form-control" placeholder="ingrese su nombre..." name="nombre">
                
            </div>
            <div class="form-group">
                <label for="">Horas trabajadas:</label>
                <input type="number" class="form-control" placeholder="ingrese sus horas.." name="horas">
            </div>
        

            <button type="submit" name="enviar" class="btn btn-danger">Seleccionar</button>
        </form>
        <div class="jumbotron">
         <table class="table table-hover table-bordered">
            <tr class = "btn-danger">
                <th>Nombre</th>
                <th>Horas trabajadas</th>
                <th>Horas extras</th>
                <th>Salario total</th>
            </tr>
            <tr>
                <td><?php echo $nombre?></td>
                <td>Horas <?php echo number_format($horas,2)?></td>
                <td>Horas <?php echo number_format($horasex,2)?></td>
                <td>$<?php echo number_format($total,2)?></td>
             
            </tr>
         </table>
        </div>
    </div>
</body>

</html>