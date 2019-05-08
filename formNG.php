<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>

<html lang="en" dir="ltr" style="font-family:Arial">


  <link rel="stylesheet" href="style.css">

  <meta charset="utf-8">
  <head >

    <title>New Game</title>

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

<h1>Register New Game</h1>
<p>Please insert the following information to add the new game</p>

    <form name = "newG_form" action = "newGame.php" method = "post">

        <h4>Game id</h4>
        <input type="text" name="id"></input>

        <h4>Name of the game</h4>
        <input type="text" name="name"></input>

        <h4>Image location</h4>
        <input type="text" name="image"></input>

        <h4>Description</h4>
        <input type="text" name="description"></input>

        <h4>Genre</h4>
        <input type="text" name="genre"></input>

        <h4>Price</h4>
        <input type="text" name="price"></input>

        <input type ='submit' name="accept" value="Accept"></input>

    </form>

</body>
</html>
