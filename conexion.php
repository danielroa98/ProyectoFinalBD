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

    //$nombre = $_POST['nombre'];

    $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "TiendaVirtual");

    if ($enlace)
      echo "Conexión exitosa. <br>";

    else
      die("Conexión no exitosa.");

      $username = $_POST['username'];
      $name = $_POST['name'];
      $password = $_POST['password'];
      $passwordVER = $_POST['passwordVER'];
      $email = $_POST['email'];

    $insert_query = mysqli_query($enlace, "INSERT INTO ACCOUNT; (`Username`, `Name`, `Password`, `Email`) VALUES
    ($username, '$name', '$password', '$email');");

    ?>
    <table border= "1">
        <?php
            echo"<tr>";
                echo"<td>"."Username";
                echo"<td>"."Name";
                echo"<td>"."Password";
                echo"<td>"."Email";
            echo"</tr>";

        echo"<tr>";
        echo"<td>".$row_asociativo['username']."</td>";
        echo"<td>".$row_asociativo['name']."</td>";
        echo"<td>".$row_asociativo['password']."</td>";
        echo"<td>".$row_asociativo['email']."</td>";
        echo"</tr>";

        ?>
    </table>

 </body>
</html>
