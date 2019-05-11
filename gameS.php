<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">


  <link rel="stylesheet" href="estilo.css">

  <meta charset="utf-8">
  <head style="font-family:Arial">

    <title>Game Settings</title>

    <?php

    error_reporting(E_ALL);         //USADO PARA DEBUGEAR
    ini_set('display_errors', 1);

    $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

    //if ($enlace)
      //echo "Conexión exitosa. <br>";
    //else
      //die("Conexión no exitosa.");

    //$sql = "SELECT id, Name, Price FROM games";
   // $result = $conn-> query($sql);

    ?>

    <header>
      <div class="topnav">
      <?php
      //session_start();
      $username = $_SESSION['User'];
      //$fondos = $_SESSION['Fondos'];

      echo'<a href="login.php">Log Out</a>';
      echo'<a class="active" href="gameS.php">Game Settings</a>';

      echo'<b>'.$username.'</b>';
      /*if($fondos==null){
        echo'<b>Fondos: 0.00<img src="Placeholder/Yepez.png" height="15" height="3" hspace="5" style="margin-left:5px"></b>';
      }
      else{
        echo'<b>Fondos: '.$fondos.'<img src="Placeholder/Yepez.png" height="15" height="3" hspace="5" style="margin-left:5px"></b>';
      }*/

      echo'<a href="homeA.php">Home</a>';

      ?>
    </div>
    </header>

  </head>
  <body style="font-family:Arial">

    <br>
    <br>

        <table class="shoppingtable">
            <tr align="center">
            <td align="left" style="padding: 20px;"><h3>New Game</h3></td>
            <td align="right" style="padding: 20px;"><h3>Remove Game</h3></td>
            </tr><!---FIN PRIMERA HILERA--->

            <tr>
              <td align="right">

              <form action="formNG.php" method="post">

                <input type ="submit" name="accept" value="Add"></input>

              </form>
              </td>

              <td align="right">

                <form action="formRG.php" method="post">

                  <input type ="submit" name="accept" value="Remove"></input>

                </form>

              </td>
            </tr>
        </table>

  </body>
</html>
