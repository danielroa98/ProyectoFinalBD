<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="styleFINAL.css">
  <meta charset="utf-8">
  <head>

    <title>Main Menu</title>


    <?php

    error_reporting(E_ALL);         //USADO PARA DEBUGEAR
    ini_set('display_errors', 1);

    //$enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

    //if ($enlace)
      //echo "Conexión exitosa. <br>";
    //else
      //die("Conexión no exitosa.");

    //$sql = "SELECT id, Name, Price FROM games";
   // $result = $conn-> query($sql);

    ?>


  </head>

  <header>
    <div class="topnav">
    <?php
    //session_start();
    $username = $_SESSION['User'];
    //$fondos = $_SESSION['Fondos'];

    echo'<a href="login.php">Log Out</a>';
    echo'<a href="formNG.php">Add New Game</a>';
        echo'<a>';
        echo'<form action="/ProyectoFinal/homeAS.php" method="get">';
        echo'<input type="text" name="gamename">';
        echo'<input type="submit" value="Submit">';
        echo'</form>';
        echo'</a>';
    echo'<b>'.$username.'</b>';
    /*if($fondos==null){
      echo'<b>Fondos: 0.00<img src="Placeholder/Yepez.png" height="15" height="3" hspace="5" style="margin-left:5px"></b>';
    }
    else{
      echo'<b>Fondos: '.$fondos.'<img src="Placeholder/Yepez.png" height="15" height="3" hspace="5" style="margin-left:5px"></b>';
    }*/

    echo'<a class="active" href="homeA.php">Home</a>';

    ?>
  </div>
  </header>

  <body style="font-family:Arial">

<h1 align="center" >
  <img src="Placeholder/logo_transparent.png" height="200" width="300">
</h1>



<?php
$conn = mysqli_connect("127.0.0.1", "adminVG", "demo.123", "GameStore");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }


//Variables y conexiones
  $sqlImage = "SELECT Image FROM games WHERE Name LIKE '%".$_GET["gamename"]."%'";
  $sqlPrice = "SELECT Price FROM games WHERE Name LIKE '%".$_GET["gamename"]."%'";
  $sqlNombre = "SELECT Name FROM games WHERE Name LIKE '%".$_GET["gamename"]."%'";
  $sqlDescripcion = "SELECT Description FROM games WHERE Name LIKE '%".$_GET["gamename"]."%'";
  $sqlGenre = "SELECT Genre FROM games WHERE Name LIKE '%".$_GET["gamename"]."%'";
  $sqlId = "SELECT id FROM games WHERE Name LIKE '%".$_GET["gamename"]."%'";
  $resultDescripcion = $conn->query($sqlDescripcion);
  $resultNombre = $conn->query($sqlNombre);
  $resultImg = $conn->query($sqlImage);
  $resultPrice = $conn->query($sqlPrice);
  $resultGenre = $conn->query($sqlGenre);
  $resultId = $conn->query($sqlId);

  $rowcount = mysqli_num_rows($resultId);
  $x = $rowcount / 6;
  $counter1 = $rowcount;
  $counter2 = $rowcount;
  //printf("Result set has ".$x);
 // if ($result->num_rows > 0) {
   // output data of each row
    for($j=0;$j<$x;$j++){
    echo '<div >';
    echo'<table>';
    echo' <tr>';
    $i = 0;
    while($i<6 && $counter1>0){
      $img = $resultImg->fetch_assoc();
      $idarray = $resultId->fetch_assoc();
      //Imagen

      echo'<td>';
      echo'<div class="overlay-image">';
      echo '<img class="image" src="'.$img["Image"].'" height="330" width="220" style ="border: 5px solid #362f32">';
      //echo'<div class="normal">';//normal

       // echo'<div class="text"><a>IMAGEN</a></div>';//normal text
      //echo'</div>';//normal
      $nombre = $resultNombre ->fetch_assoc();
      echo'<div class="hover">';//hover
      echo'<div class="text">';
      echo$nombre["Name"];
      echo'<br>';
      echo'</div>';//hover text
      $descripcion = $resultDescripcion->fetch_assoc();

      echo'<div class="textdescription">';
      echo$descripcion["Description"];
      echo'<br>';
      $genre = $resultGenre->fetch_assoc();
      echo'Genre: '.$genre["Genre"];
      echo'</div>';//hover text
      //$id = $idarray["id"];
     // $_SESSION['id']=$id;
      echo'<a href="removeGame.php?hashtag='.$idarray["id"].'"><img class="trashbutton" src="Placeholder/trash.png"></a>';
      echo'<a href="formUG.php?hashtag='.$idarray["id"].'"><img class="editbutton" src="Placeholder/edit.png" ></a>';
      echo'</div>';//hover
     // echo'</div>'; //overlay

      echo'</div>';
      echo'</td>';

      $i++;
      $counter1--;
    } //while

    echo'</tr>';

    //Precio
    $i=0;
    echo'<tr>';
    while($i<6 && $counter2>0){
      $price = $resultPrice->fetch_assoc();
        echo'<td align="center" style ="border: 5px solid #362f32" class="pricetxt">'.$price["Price"];
        if($price!=null){
          echo'<img src="Placeholder/Yepez.png" height="30" height="30 hspace="20" style="margin-left:5px">';
        }
        //'<img src="Placeholder/Yepez.png" height="40" height="40 hspace="20" >
      echo'</td>';
      $i++;
      $counter2--;
    }
    echo'</tr>';
    echo'</table>';
    echo'</div>';
    echo'<br><br><br>';
  }
//}//if


  //  echo "</table>";
 //else { echo "0 results"; }
$conn->close();
?>




  </body>

</html>
