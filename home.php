<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="style.css">
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
      $conn = mysqli_connect("127.0.0.1", "adminVG", "demo.123", "GameStore");


      $username = $_SESSION['User'];
      $idtest = $username;

      //$sqlFund = "SELECT SecurityCode FROM creditcard WHERE OwnerName = '$idtest'";
      $sqlFund = "SELECT Funds FROM Users WHERE Username = '$idtest'";
      $result = mysqli_query($conn, $sqlFund);
      $rs = mysqli_fetch_array($result);


      echo'<a href="login.php">Log Out</a>';
              echo'<a>';
        echo'<form action="/ProyectoFinal/homeS.php" method="get">';
        echo'<input type="text" name="gamename">';
        echo'<input type="submit" value="Submit">';
        echo'</form>';
        echo'</a>';
      echo'<a href="cart.php"><img src="shopping-cart.png"></a>';
      echo'<a href="funds.php">Add Funds</a>';
      echo'<a href="card.php">Add CreditCard</a>';

      echo'<b>'.$username.'</b>';
      if($rs['Funds']==null){
        echo'<b>Fondos: 0.00<img src="Placeholder/Yepez.png" height="15" height="3" hspace="5" style="margin-left:5px"></b>';
      }
      else{
        echo'<b>Fondos: '.$rs['Funds'].'<img src="Placeholder/Yepez.png" height="15" height="3" hspace="5" style="margin-left:5px"></b>';
      }
        //Buscar juego
      echo'<a class="active" href="home.php">Home</a>';


      $fondos = $rs['Funds'];
      $_SESSION['Fondos'] = $fondos;


echo mysqli_error($conn);


    echo'</div>';

    echo'</header>';

  echo'<body style="font-family:Arial">';

echo'<h1 align="center" >';
  echo'<img src="Placeholder/logo_transparent.png" height="200" width="300">';
echo'</h1>';

//$conn = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }


  //Variables y conexiones
  $sqlImage = "SELECT Image FROM games";
  $sqlPrice = "SELECT Price FROM games";
  $sqlNombre = "SELECT Name FROM games";
  $sqlDescripcion = "SELECT Description FROM games";
  $sqlGenre = "SELECT Genre FROM games;";
  $sqlId = "SELECT id FROM games;";
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
      echo'<div class="normal">';//normal

       // echo'<div class="text"><a>IMAGEN</a></div>';//normal text
      echo'</div>';//normal
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
      echo'<a href="insertcart.php?hashtag='.$idarray["id"].'"><img class="buybutton" src="Placeholder/comprar.png" ></a>';
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
          //echo'<form action = "checkbox-form.php" method="post">';
          //echo'<input type="checkbox" name="wheelchair" value="Yes"/';
         // echo'</form>';
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
