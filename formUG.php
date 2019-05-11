<?php
// Start the session
session_start();
?>

<!DOCTYPE HTML>

<html lang="en" dir="ltr" style="font-family:Arial">


  <link rel="stylesheet" href="style.css">

  <meta charset="utf-8">
  <head >

    <title>Update Game</title>

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
      $id = $_GET["hashtag"];
      $_SESSION['ID'] = $id;

      ?>
    </div>
    </header>

</head>
<body>

<h1>Update Game</h1>
    <form name = "newG_form" action = "editgame.php" method = "post" enctype="multipart/form-data">

      <?php
        $conn = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");
        $id = $_SESSION['ID'];
        $sqlPrice = "SELECT Price FROM games WHERE id = '$id'";
        $sqlNombre = "SELECT Name FROM games WHERE id = '$id'";
        $sqlDescripcion = "SELECT Description FROM games WHERE id = '$id'";
        $sqlGenre = "SELECT Genre FROM games WHERE id = '$id'";
        $sqlImg = "SELECT Image FROM games WHERE id = '$id'";
        $resultDescripcion = $conn->query($sqlDescripcion);
        $resultNombre = $conn->query($sqlNombre);
        $resultPrice = $conn->query($sqlPrice);
        $resultGenre = $conn->query($sqlGenre);
        $resultImg = $conn->query($sqlImg);

        $nombre = $resultNombre ->fetch_assoc();
        $descripcion = $resultDescripcion->fetch_assoc();
        $genre = $resultGenre->fetch_assoc();
        $price = $resultPrice->fetch_assoc();
        $image = $resultImg->fetch_assoc();

        echo'<h4>Name of the game</h4>';
        echo'<input type="text" name="name" value="'.$nombre['Name'].'"></input>';

        echo'<h4>Image location (Due to issues, you must re-select the image of the game)</h4>';
        echo'<input type="file" name="fileToUpload" value="'.$image['Image'].'" id="fileToUpload"></input>';

        echo'<h4>Description</h4>';
        echo'<input type="text" name="description" value="'.$descripcion['Description'].'"></input>';

        echo'<h4>Genre</h4>';
        echo'<input type="text" name="genre" value="'.$genre['Genre'].'"></input>';

        echo'<h4>Price</h4>';
        echo'<input type="text" name="price" value="'.$price['Price'].'"></input>';

        echo"<input type ='submit' name='accept' value='Accept'></input>";

    echo'</form>';
?>
</body>
</html>
