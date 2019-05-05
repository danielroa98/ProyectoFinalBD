<!DOCTYPE html>
<html lang="en" dir="ltr">

  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <head style="font-family:Arial">

    <title>Main Menu</title>

    <header>
      <div class="topnav">
          <a href="home.php">Log Out</a>
          <a class="active" href="gameS.php">Game Settings</a>
          <!---<a href="userS.php">User Settings</a>--->
          <a href="homeA.php">Home</a>
      </div>

    </header>

  </head>
  <body style="font-family:Arial">

    <br>
    <br>

        <table>
            <tr align="center">
            <th align="left" ><h3>New Game</h3></th>
            <td>-------------------------------------------------------</td>
            <td align="right" ><h3>Remove Game</h3></td>
            </tr><!---FIN PRIMERA HILERA--->

            <tr>
              <td align="right">

              <form action="formNG.php" method="post">

                <input type ="submit" name="accept" value="Add"></input>

              </form>
              </td>

              <td>------------------------------------------------------------------</td>

              <td align="right">

                <form action="formRG.php" method="post">

                  <input type ="submit" name="accept" value="Remove"></input>

                </form>

              </td>
            </tr>
        </table>

  </body>
</html>
