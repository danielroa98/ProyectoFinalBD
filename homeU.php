<!DOCTYPE html>

<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="styleFINAL.css">
  <meta charset="utf-8">
  <head>

    <title>Main Menu</title>


  </head>

  <header>
    <?php

    $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

    echo"<div class='topnav'>";
        echo"<a href='home.php'>Log Out</a>";

          $sql = "SELECT Amount FROM funds INNER JOIN creditcard ON (CREDITCARD_Number.funds) WHERE ";
          $result = $enlace->query($sql);

          $row = $result->fetch_assoc();



          $dB = "SELECT Username FROM Users";
          $resultado = $enlace->query($dB);

          $roW = $resultado->fetch_assoc();

          /*
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "Funds: ". $row["Amount"]. "<br>";
            }
          } else {
        echo "Funds: 0";
      }*/

        echo "<b>Welcome ".$roW['Username']."</b>";

        echo"<a href='cart.php'><img src='Placeholder/shopping-cart.png'></a>";

        echo"<a>Funds Available: ".$row['Amount']." <img src='Placeholder/Yepez.png' height='15' height='3' hspace='5' style='margin-left:5px'> </a>";

        echo"<a href='funds.php'>Add Funds</a>";
        echo"<a href='card.php'>Add CC</a>";
        echo"<a class='active' href='homeU.php'>Home</a>";
      echo"</div>";

    ?>
    </header>

  <body style="font-family:Arial">

<!-–– Title –-–>
<h1 align="center" style="color:rgb(219, 216, 210);">LOLIS4LL</h1>
<!–– Row 1 ––>
<!–– Imagenes ––>

<!–– Cajitas con nombre/precio ––>


<?php
$conn = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }


  $sqlImage = "SELECT Image FROM games";
  $sqlPrice = "SELECT Price FROM games";
  $sqlNombre = "SELECT Name FROM games";
  $sqlDescripcion = "SELECT Description FROM games";
  $resultDescripcion = $conn->query($sqlDescripcion);
  $resultNombre = $conn->query($sqlNombre);
  $resultImg = $conn->query($sqlImage);
  $resultPrice = $conn->query($sqlPrice);

  $rowcount = mysqli_num_rows($resultImg);
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
      echo'</div>';//hover text
      echo'<a href="http://moonlighterthegame.com/"><img class="buybutton" src="Placeholder/buy.png" ></a>';
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
