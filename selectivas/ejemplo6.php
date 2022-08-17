<?php
$nombre = "";
$color = "";
$mensaje = "";
$compra = 0;
$des = 0;
$total = 0;
if (isset($_POST['enviar'])) {
    $compra = floatval ($_POST['compra']);
    $nombre =  ($_POST['nombre']);
    $color =  ($_POST['color']);
if ($color == "blanco"){
$mensaje = "<div class= role='alert'> No posee descuento</div>";
}else if ($color == "verde"){
   $des = $compra * 0.10;
   $mensaje = "<div class= role='alert'> 10%</div>";
}else if ($color == "amarillo"){
    $des = $compra * 0.25;
    $mensaje = "<div class= role='alert'> 25%</div>";
}else if ($color == "azul"){
    $des = $compra * 0.50;
    $mensaje = "<div class= role='alert'> 50%</div>";
}else if ($color == "rojo"){
    $des = $compra * 1;
    $mensaje = "<div class= role='alert'> 100%</div>";
}else{
    $mensaje = "<div class= role='alert'>color invalido</div>";
}
    $total = $compra - $des;
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
        EJEMPLO 6
    </div>
    <div class="container">
        <form method="POST" action="ejemplo6.php">
        <div class="form-group">
                <label for="">Nombre del Cliente:</label>
                <input type="text" class="form-control" placeholder="ingrese su Nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="">Ingrese su compra:</label>
                <input type="number" class="form-control" placeholder="ingrese su compra" name="compra">
            </div>
        <div class="form-group">
                <label for="">Ingrese el color de la bolita seleccionada:</label>
                <select name="color" id="" class="form-control">
                    <option value="seleccionar" >seleccionar</option>
                    <option value="blanco">blanco</option>
                    <option value="amarillo">amarrillo</option>
                    <option value="verde">verde</option>
                    <option value="azul">azul</option>
                    <option value="rojo">rojo</option>
                </select>
                
            </div>
            <button type="submit" name="enviar" class="btn btn-outline-danger">Seleccionar</button>
        </form>
        <div class="jumbotron">
         <table class="table table-hover table-bordered">
            <tr class = "btn-danger">
                <th>Nombre</th>
                <th>Su compra</th>
                <th>Descuento</th>
                <th>porcentaje de descuento</th>
                <th>total a pagar</th>
            </tr>
            <tr>
                <td><?php echo $nombre?></td>
                <td>$ <?php echo number_format($compra,2)?></td>
                <td>$ <?php echo number_format($des,2)?></td>
                <td><?php echo $mensaje?></td>
                <td>$<?php echo number_format($total,2)?></td>
             
            </tr>
         </table>
        </div>
    </div>
</body>

</html>