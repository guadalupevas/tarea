<?php
$base = 0;
$altura = 0;
$Hipo = 0;
$mensaje = "";
 if (isset($_POST['enviar'])) {
$base = floatval ($_POST["cbase"]);

$altura = floatval ($_POST["caltura"]);

$Hipo = sqrt(pow($base,2) + pow($altura,2));
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
    <title>selectivas</title>
</head>

<body>
    <div class="alert alert-danger" role="alert">
        EJEMPLO 3
    </div>
    <div class="container">
        <form method="POST" action="index3.php">
            <div class="form-group">
                <label for="">Lado 1:</label>
                <input type="number" class="form-control" placeholder="ingrese un lado.." step="0.1" name="cbase">
            </div>
            <div class="form-group">
                <label for="">Lado 2:</label>
                <input type="number" class="form-control" placeholder="ingrese unlado..." step="0.1" name="caltura">
            </div>

            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">

                <h3>Hipotenusa: <?php echo $Hipo; ?></h3>

        </div>
        <?php echo $mensaje; ?>
    </div>
</body>

</html> 