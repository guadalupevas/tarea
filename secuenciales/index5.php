<?php
$Fahrenheit = 0;
$celcius = 0;
$mensaje = "";
 if (isset($_POST['enviar'])) {
$Fahrenheit = floatval ($_POST["Fahrenheit"]);
 $celcius = ($Fahrenheit - 32) * 5/9;

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
    <title>Ejemplo 5</title>
</head>

<body>
    <div class="alert alert-danger" role="alert">
        EJEMPLO 5
    </div>
    <div class="container">
        <form method="POST" action="index5.php">
            <div class="form-group">
                <label for="">Grados Fahrenheit:</label>
                <input type="number" class="form-control" placeholder="ingrese los grados Fahrenheit.." step="0.1" name="Fahrenheit">
            </div>

            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">

                <h3>Grados Fahrenheit covertidos a Celcius: <?php echo $celcius; ?></h3>

        </div>
        <?php echo $mensaje; ?>
    </div>
</body>

</html>