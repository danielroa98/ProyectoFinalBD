<?php

session_start();
?>
<!DOCTYPE HTML>

<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="style.css">

  <meta charset="utf-8">
  <head >

    <title>Remove Game</title>

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
<body>

<p>Please insert the following information from the game you wish to remove</p>

    <form name = "removeG_form" action = "removeGame.php" method = "post">

        <h4>Game id</h4>
        <input type="text" name="id"></input>

        <input type ='submit' name="accept" value="Remove"></input>

    </form>

</body>
</html>
