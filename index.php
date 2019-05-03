<!DOCTYPE html>

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

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Login</title>
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
