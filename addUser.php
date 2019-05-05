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

      $username = $_POST['username'];
      $name = $_POST['name'];
      $password = $_POST['password'];
      $passwordVER = $_POST['passwordVER'];
      $email = $_POST['email'];

     $hashP = password_hash($password, PASSWORD_DEFAULT);

    $insert_query = mysqli_query($enlace, "INSERT INTO USERS (`Username`, `Name`, `Password`, `Email`) VALUES
    ('$username', '$name', '$hashP', '$email');");

      echo mysqli_error($enlace);

     echo" ";
    
      header("Location: login.php");

      //echo $hash;
    ?>

 </body>
</html>
