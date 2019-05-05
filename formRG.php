<!DOCTYPE HTML>

<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="styleFINAL.css">
  <meta charset="utf-8">
  <head >

    <title>Remove Game</title>

    <header>
      <div class="topnav">
          <a href="home.php">Log Out</a>
          <a class="active" href="gameS.php">Game Settings</a>
          <!---<a href="userS.php">User Settings</a>--->
          <a href="homeA.php">Home</a>
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
