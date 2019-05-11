<!DOCTYPE html>

  <link rel="stylesheet" href="estilo.css">
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
      <table class="shoppingtable" style="margin-top: 200px">
        <tr>
        <td>Username:</td>
        <td><input type="text" name="username"></input></td>
        </tr>

        <tr>
        <td>Password:</td>
        <td><input type="password" name="password"></input></td>
          </tr>

          <tr>
        <td colspan="2"><input type="submit" name="login" value="Login"></td>
      </tr>
          </form>
      <tr>
        <form class="register_form" action="register.php" method="post">
        <td colspan="2">Don't have an account? <input type="submit" name="register" value="Click Here"></td>
        </form>
      </tr>


    

      <p>

    </p>
    </table>
    </form>


  </body>
</html>
