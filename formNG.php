<!DOCTYPE HTML>

<html lang="en" dir="ltr" style="font-family:Arial">

<<<<<<< HEAD
  <link rel="stylesheet" href="styleFINAL.css">
=======
  <link rel="stylesheet" href="style.css">
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834
  <meta charset="utf-8">
  <head >

    <title>New Game</title>

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
