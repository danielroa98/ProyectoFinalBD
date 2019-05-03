<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Conexión a base de datos</title>
</head>

<body>
  <?php
    error_reporting(E_ALL);         //USADO PARA DEBUGEAR
    ini_set('display_errors', 1);

    $nombre = $_POST['nombre'];
    $nomina = $_POST['nomina'];
    $salario = $_POST['salario'];
    $puesto = $_POST['puesto'];
    $horario = $_POST['horario'];
    $sucursal = $_POST['sucursal'];

    $enlace = mysqli_connect("127.0.0.1", "adminphp", "3922bast", "cafeterias");
    if ($enlace)
      echo "Conexion exitosa. <br>";

    else
      die("Conexión no exitosa.");

    $resultado_query = mysqli_query($enlace, "SELECT * FROM cafeterias.empleado where nombre like '%$nombre%';");

    //$insert_query = mysqli_query($enlace, "INSERT INTO cafeterias.empleado('nomina','nombre','horario','puesto','salario','sucursal') VALUES (12345677,'Colombian','10:00-1:00','Pantufla','1','LEARNING');");
    $insert_query = mysqli_query($enlace, "INSERT INTO EMPLEADO
(`nomina`, nombre, horario, puesto, salario,`sucursal`)
VALUES
($nomina, '$nombre', '$horario', '$puesto', '$salario', '$sucursal');");
   ?>
<table border = "1">
<?php
    echo "<tr>";
       echo "<td>"."Nomina";
        echo "<td>"."Nombre";
        echo "<td>"."Puesto";
            echo "<td>"."Horario";
                echo "<td>"."Salario ($)";
                    echo "<td>"."Sucursal ($)";
    echo "</tr>";
while($row_asociativo = mysqli_fetch_assoc($resultado_query))
{

    echo "<tr>";
    echo "<td>".$row_asociativo['nomina']."</td>";
    echo "<td>".$row_asociativo['nombre']."</td>";
    echo "<td>".$row_asociativo['puesto']."</td>";
    echo "<td>".$row_asociativo['horario']."</td>";
    echo "<td>".$row_asociativo['salario']."</td>";
    echo "<td>".$row_asociativo['sucursal']."</td>";
    echo "</tr>";

}

 ?>
</table>
 </body>
</html>
