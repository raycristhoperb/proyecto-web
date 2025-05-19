<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis datos</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    

 <?php
 $nombre="Ray Cristhoper";
 $apellido="Bonilla Muñoz";
 $edad="34 años";
 $sueldo=5500.23;
 //proceso
 $cont=$nombre." ".$apellido;
 //salida
 echo "<h1>Mis datos son: </h1>".$cont;
 //4 variables de forma libre, luego mostrar cada variable

 $moto="ktm";
 $precio=20000;
 $modelo="deportiva";
 $color="azul";
 //proceso
 $cont=$moto." ".$precio;

 echo"<h1>precio de la moto: </h1>".$precio;
 echo"<h2>modelo de la moto: </h2>".$modelo;
 echo"<h3>color de la moto: </h3>".$color;
 echo"<h4>veiculo: </h4>".$precio;

 echo"<h1>hola soy ray y vengo a comprar una moto ".$moto." que sea de color ".$color." azul y de preferencia de modelo ".$modelo."
 pueden darme un descuent ya que el precio de ".$precio." soles es muy elevado para mi presupuesto";




?>


</body>
</html>