<?php //inicio
//TIPOS DE DATOS EN PHP
//Texto = Cadena
//Numerico
//Int
//Float, double
//Char

$nombre = "";
$apellido ="";
$dui = "";
$edad = 0;
$telefono = "";
$direccion = "";
$mensaje = "";

if (isset($_POST['enviar'])) {
    $nombre =  ($_POST['nombre']);
    $apellido = ($_POST['apellido']);
    $dui = ($_POST['dui']);
    $edad = floatval ($_POST['edad']);
    $telefono =  ($_POST['telefono']);
    $direccion =  ($_POST['direccion']);
    
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
    <title>secuencial
    </title>
</head>

<body>
    <div class="alert alert-danger" role="alert">
        EJEMPLO 1
    </div>
    <div class="container">
        <form method="POST" action="index1.php">
            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" class="form-control" placeholder="ingrese su nombre..." name="nombre">
            </div>
            <div class="form-group">
                <label for="">Apellido:</label>
                <input type="text" class="form-control" placeholder="ingrese su apellido..." name="apellido">
            </div>
            <div class="form-group">
                <label for="">Dui:</label>
                <input type="text" class="form-control" placeholder="ingrese su Dui..." name="dui">
            </div>
            <div class="form-group">
                <label for="">Edad:</label>
                <input type="number" class="form-control" placeholder="ingrese su edad..." name="edad">
            </div>
            <div class="form-group">
                <label for="">Telefono:</label>
                <input type="text" class="form-control" placeholder="ingrese su numero de telefono..." name="telefono">
            </div>
            <div class="form-group">
                <label for="">Direccion:</label>
                <input type="text" class="form-control" placeholder="ingrese su direccion..." name="direccion">
            </div>

            <button type="submit" name="enviar" class="btn btn-success">Ingresar datos</button>
        </form>
        <div class="jumbotron">
            <table class = "table table-hover ">
                <tr class="btn-success">
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dui</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                </tr>
                <tr>
                    <td><?php echo $nombre?></td>
                    <td><?php echo $apellido?></td>
                    <td><?php echo $dui?></td>
                    <td><?php echo $edad?></td>
                    <td><?php echo $telefono?></td>
                    <td><?php echo $direccion?></td>

                </tr>
            </table>

        </div>
        <?php echo $mensaje; ?>
    </div>
</body>

</html>