<!DOCTYPE html>

  <link rel="stylesheet" href="styleFINAL.css">
  <meta charset="utf-8">

<html lang="en" dir="ltr" style="font-family:Arial">
  <head>

    <title>User Login</title>

    <header>
    <div class="topnav">

      <a href="register.php">Sign up</a>
      <a class="active" href="login.php">Login</a>
      <a  href="home.php">Home</a>
    </div>

    </header>

  </head>
  <body>

    <form name="login_form" action="verified.php" action="homeU.php" method="get">

        <h4>Username:</h4>
        <input type="text" name="username"></input>

        <h4>Password:</h4>
        <input type="password" name="password"></input>
          <br/>
          <br>
        <input type="submit" name="login" value="Login">
    </form>

  </body>
</html>
