<!DOCTYPE html>
<html lang="en" dir="ltr">

  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <head style="font-family:Arial">

    <title>Main Menu</title>

    <header>
    <div class="topnav">  
        <a href="home.php">Log Out</a>   
        <a href="gameS.php">Game Settings</a>
        <a class="active" href="userS.php">User Settings</a>
        <a href="homeA.php">Home</a>
    </div>

    </header>

  </head>
  <body style="font-family:Arial">

    <h3 style="text-align:center">Add Admin</h3>

    <div>

    <table>
        <tr> 
        <th>Existant Account</th>
        </tr><!---FIN PRIMERA HILERA--->

        <form action="add_form" action="formMOD.php" method="post">

        <tr style="text-align: right">
        <td>Insert username: <input type="text" name="username"></td>
        </tr>

        <tr style="text-align: right">
        <td>Insert usertype (admin or user): <input type="text" name="usertype"></td>
        </tr>

        <tr style="text-align: right">
        <td><input type="submit" name="accept" value="Accept"></td>
        </tr>

        </form>
    </table>

    <br>
    <br>

  
    <table>
        <tr align="center"> 
        <th>New Account</th>
        </tr><!---FIN PRIMERA HILERA--->

        <form action="nombre_form" action="formADD.php" method="post">

        <tr style="text-align: right">
        <td>
        Username
        <input type="text" name="username"></input>
        </td>
        </tr>

        <tr style="text-align: right">
        <td>
        First and Last Name
        <input type="text" name="name"></input>
        </td>
        </tr>

        <tr style="text-align: right">
        <td>
        Password
        <input type="password" name="password"></input>
        </td>
        </tr>

        <tr style="text-align: right">
        <td>
        Re-enter Password
        <input type="password" name="passwordVER"></input>
        </td>
        </tr>

        <tr style="text-align: right">
        <td>
        Email
        <input type="text" name="email"></input>
        </td>
        </tr>

        <tr style="text-align: right">
        <td>
        Insert usertype (admin or user): 
        <input type="text" name="usertype">
        </td>
        </tr>

        <tr style="text-align:right">
        <td>
        <input type ="submit" name="accept" value="Aceptar"></input>
        </tr>
        </td>

        </form>
    </table>
    </div>

  </body>
</html>
