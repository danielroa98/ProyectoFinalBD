<!DOCTYPE html>

  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">

<html lang="en" dir="ltr" style="font-family:Arial">
  <head>

    <title>User Login</title>

    <header>
<!---
    <div class="topnav">

      <a href="register.php">Sign up</a>
      <a class="active" href="login.php">Login</a>
      <a  href="home.php">Home</a>
    </div>
---->
    </header>

  </head>
  <body>

    <form name="login_form" action="verified.php" method="get">

        <h4>Username:</h4>
        <input type="text" name="username"></input>

        <h4>Password:</h4>
        <input type="password" name="password"></input>
          <br/>
          <br>
        <input type="submit" name="login" value="Login">
    </form>

    <form class="register_form" action="register.php" method="post">

      <p>
        <h4>So, you dont have an account yet?</h4>
        <h4>Click</h4> <input type="submit" name="register" value="Here">

    </p>

    </form>


  </body>
</html>
