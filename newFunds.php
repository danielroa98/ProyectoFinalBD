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

    else{
      die("Conexión no exitosa.");
}
      session_start();
      $username = $_SESSION['User'];
      $fondos = $_SESSION['Fondos'];

      $funds = $_POST['funds'];
      $creditcard = $_POST['ccNum'];
      $colombian = $fondos + $funds;
      echo$funds;
      echo$username;

      $sqlresult = "SELECT Number FROM creditcard WHERE Number = '$creditcard'";
      $result = mysqli_query($enlace, $sqlresult);
      if(mysqli_num_rows($result) == 0){
       echo "<script>alert('La tarjeta ingresada no existe o no esta registrada, confirma los datos ingresados');</script>";
       echo'<meta http-equiv="refresh" content="0;URL=funds.php" />';
      }

      else{
    //$insert_query = mysqli_query($enlace, "INSERT INTO USERS ('Funds') VALUES ('$funds') WHERE Username = '$username'");
      $sql = "UPDATE USERS SET Funds = '$colombian' WHERE Username = '$username'";

if ($enlace->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $enlace->error;
}
     echo" ";

      header("Location: home.php");
}
      //echo $hash;
    ?>

 </body>
</html>
