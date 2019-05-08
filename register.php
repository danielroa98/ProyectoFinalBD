<!DOCTYPE HTML>

<link rel="stylesheet" href="styleFINAL.css">

<meta charset="utf-8">
<html style="font-family:Arial">
<head>
<title>New User</title>
</head>
<body>

<h1>Registration</h1>
<p>Please insert the following information</p>

<?php
    error_reporting(E_ALL);         //USADO PARA DEBUGEAR
    ini_set('display_errors', 1);

    $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

    /*

    if ($enlace)
      echo "Conexión exitosa. <br>";
    else
      die("Conexión no exitosa.");

      */
    ?>

    <form name = "nombre_form" action = "addUser.php" method = "post">

        <h4>Username</h4>
        <input type="text" name="username"></input>

        <h4>First Name and Last Name</h4>
        <input type="text" name="name"></input>

        <h4>Password</h4>
        <input type="password" name="password"></input>

        <h4>Re-enter Password</h4>
        <input type="password" name="passwordVER"></input>

        <h4>Email Address</h4>
        <input type="text" name="email"></input>

        <input type ='submit' name="accept" value="Aceptar"></input>

    </form>


<?php

/*
$password;
$passwordVER;

if($password == $passwordVER){

  echo "SUCCESS!!. <br>";

}
*/
?>
</body>
</html>
