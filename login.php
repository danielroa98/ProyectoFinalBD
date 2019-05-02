<!DOCTYPE html>

  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <?php
    session_start();

    $username = "user";
    $password = "passwordDEMO";

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
      header("Location: session.php");
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
      if ($_POST['username'] == $username && $_POST['password'] == $password) {

        $_SESSION['logged_in'] = true;
        header("Location: session.php");

      }
    }
   ?>

<html lang="en" dir="ltr" style="font-family:Arial">
  <head>
    <title>User Login</title>

    <div class="topnav">
      <a href="home.php">Home</a>
      <a href="#contact">Contact</a>
      <a class="active" href="login.php">User login</a>
      <a href="register.php">New Account</a>
      <a href="#about">About</a>
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

  </body>
</html>
