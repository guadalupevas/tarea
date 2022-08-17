<?php
$ingreso = 0;
$pediatria = 0;
$oncologia = 0;
$trauma = 0;
$mensaje = "";
if (isset($_POST['enviar'])) {
    $ingreso = floatval ($_POST['ingreso']);
 $pediatria = $ingreso * 0.30;
 $oncologia = $ingreso * 0.40;
 $trauma = $ingreso * 0.30;
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
    <title>Ejemplo 11</title>
</head>

<body>
    <div class="alert alert-danger" role="alert">
        Selectiva 11
    </div>
    <div class="container">
        <form method="POST" action="index11.php">
            <div class="form-group">
                <label for="">Presupuesto Anual</label>
                <input type="text" class="form-control" placeholder="ingrese el presupuesto" name="ingreso">
            </div>

            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">
            <table class = "table table-hover ">
            <tr class="btn-danger">
                    <th>Area</th>
                    <th>Porcentajes</th>
                    <th>Ingreso</th>
                </tr>
                <tr>
                    <td>Pediatria</td>
                    <td>30%</td>
                    <td>$<?php echo number_format($pediatria,2)?></td>
                </tr>
                <tr>
                    <td>Oncologia</td>
                    <td>40%</td>
                    <td>$<?php echo number_format($oncologia,2)?></td>
                </tr>
                <tr>
                    <td>Traumatologia</td>
                    <td>30%</td>
                    <td>$<?php echo number_format($trauma,2)?></td>
                </tr>
            </table>

        </div>
        <?php echo $mensaje; ?>
    </div>
</body>

</html>