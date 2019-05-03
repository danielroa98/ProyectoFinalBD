<!DOCTYPE html>

  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">

<html lang="en" dir="ltr" style="font-family:Arial">
  <head>
   
    <header>
    <div class="topnav">
      <b href="youFoundUs.html">PLACEHOLDER</b>
      
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
      <a href="register.php">New Account</a>
      <a class="active" href="login.php">User login</a>
      <a href="home.php">Home</a>
    </div>

    </header>

  </head>
  <body>

    <form name="login_form" action="loginF.php" method="post">

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
