<?php
$num1 = 0;
$num2 = 0;
$num3 = 0;
$media = 0;
$mensaje = "";
 if (isset($_POST['enviar'])) {
$num1 = floatval ($_POST["num1"]);
$num2 = floatval ($_POST["num2"]);
$num3 = floatval ($_POST["num3"]);
 $media = ($n1 + $n2 + $n3) / 3;
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
    <title>Ejemplo 6</title>
</head>

<body>
    <div class="alert alert-danger" role="alert">
        EJEMPLO 6
    </div>
    <div class="container">
        <form method="POST" action="index6.php">
            <div class="form-group">
                <label for="">Numero 1:</label>
                <input type="number" class="form-control" placeholder="ingrese un numero.." step="0.1" name="nun1">
            </div>
            <div class="form-group">
                <label for="">Numero 2:</label>
                <input type="number" class="form-control" placeholder="ingrese un numero..." step="0.1" name="num2">
            </div>
            <div class="form-group">
                <label for="">Numero 3:</label>
                <input type="number" class="form-control" placeholder="ingrese un numero..." step="0.1" name="num3">
            </div>

            <button type="submit" name="enviar" class="btn btn-danger">calcular</button>
        </form>
        <div class="jumbotron">

                <h3>La media aritmetica es: <?php echo $media; ?></h3>

        </div>
        <?php echo $mensaje; ?>
    </div>
</body>

</html>