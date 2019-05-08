<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>New User</title>
</head>

<body>
  <?php
    error_reporting(E_ALL);         //USADO PARA DEBUGEAR
    ini_set('display_errors', 1);

    $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

    if ($enlace)
      echo "Conexión exitosa. <br>";

    else
      die("Conexión no exitosa.");

      $ccNum = $_POST['ccNum'];
      $funds = $_POST['funds'];

    $insert_query = mysqli_query($enlace, "INSERT INTO FUNDS (`CREDITCARD_Number`, `Amount`) VALUES
    ('$ccNum', '$funds');");

      echo mysqli_error($enlace);

     echo" ";

      header("Location: home.php");

      //echo $hash;
    ?>

 </body>
</html>
