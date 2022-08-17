<?php
$sueldo = 0;
$aumento = 0;
$sueldot = 0;
$nombre = "";
$mensaje = "";
if (isset($_POST['enviar'])) {
    $sueldo = floatval ($_POST['sueldo']);
    $nombre =  ($_POST['nombre']);
    
if($sueldo < 600){
    $aumento = $sueldo * 0.10;
    $sueldot = $sueldo + $aumento;
    $mensaje = "<div class='alert alert-success' role='alert'> Se a aplicado un aumento del 10% </div>";
}else{
    $mensaje = "<div class='alert alert-success' role='alert'>No tiene ningun Aumento</div>";
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
    <title>selectiva 2</title>
</head>

<body>
    <div class="alert alert-success" role="alert">
        EJEMPLO
    </div>
    <div class="container">
        <form method="POST" action="selectiva2.php">
        <div class="form-group">
                <label for="">Nombre del empleado</label>
                <input type="text" class="form-control" placeholder="ingrese su Nombre" name="nombre">
            </div>
        <div class="form-group">
                <label for="">Sueldo de empleado</label>
                <input type="text" class="form-control" placeholder="ingrese su sueldo" name="sueldo">
            </div>


            <button type="submit" name="enviar" class="btn btn-outline-success">calcular</button>
        </form>
        <div class="jumbotron">
                 <h3><?php echo $nombre; ?></h3>
             <table class="table table-hover">
                <tr>
                    <th>Sueldo</th>
                    <th>aumento 10%</th>
                    <th>Nuevo sueldo</th>
                </tr>
                <tr>
                    <td>$<?php echo number_format($sueldo,2)?></td>
                    <td>$<?php echo number_format($aumento,2)?></td>
                    <td>$<?php echo number_format($sueldot,2)?></td>
                </tr>
             </table>
        </div>
        <?php echo $mensaje;?>
    </div>
</body>

</html>