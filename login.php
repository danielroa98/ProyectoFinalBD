<!DOCTYPE html>

  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">

<html lang="en" dir="ltr" style="font-family:Arial">
  <head>
    <title>User Login</title>

    <div class="topnav">
      <b href="youFoundUs.html">PLACEHOLDER</b>
      
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
      <a href="register.php">New Account</a>
      <a href="login.php">User login</a>
      <a class="active" href="#home">Home</a>
    </div>

  </head>
  <body>

    <form action="index.php" method="post">

        Username:<br/>
        <input type="text" name="username"><br/>

        Password:<br/>
        <input type="password" name="password"><br/>
          <br/>
        <input type="submit" name="" value="Login">
    </form>

    <?php
    //error_reporting(E_ALL);         //USADO PARA DEBUGEAR
    //ini_set('display_errors', 1);

    //$nombre = $_POST['nombre'];

    $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "TiendaVirtual");

    if ($enlace)
      echo "Conexión exitosa. <br>";

    else
      die("Conexión no exitosa.");

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
      header("Location: homeU.php");
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
      if ($_POST['username'] == $username && $_POST['password'] == $password) {

        $_SESSION['logged_in'] = true;
        header("Location: session.php");

      }
    }
   ?>

  </body>
</html>
