<!DOCTYPE html>

  <link rel="stylesheet" href="estilo.css">
  <meta charset="utf-8">

<html lang="en" dir="ltr" style="font-family:Arial">
  <head>

    <title>Shopping cart</title>

    <header>
    <div class="topnav">
      <?php
      session_start();
      $username = $_SESSION['User'];
      $fondos = $_SESSION['Fondos'];

      echo'<a href="login.php">Log Out</a>';
      echo'<a class="active" href="cart.php"><img src="shopping-cart.png"></a>';
      echo'<a href="funds.php">Add Funds</a>';
      echo'<a href="card.php">Add CreditCard</a>';

      echo'<b>'.$username.'</b>';
      if($fondos==null){
        echo'<b>Fondos: 0.00<img src="Placeholder/Yepez.png" height="15" height="3" hspace="5" style="margin-left:5px"></b>';
      }
      else{
        echo'<b>Fondos: '.$fondos.'<img src="Placeholder/Yepez.png" height="15" height="3" hspace="5" style="margin-left:5px"></b>';
      }
      echo'<a href="home.php">Home</a>';

      ?>
    </div>

    </header>

  </head>
  <body>

    <h1 align="center" class="pricetxt">SHOPPING CART</h1>

    <table class="shoppingtable">
    <?php
      $conn = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");
      //Declaracion de conexiones

      //session_write_close();
      $username = $_SESSION['User'];

      //Contar cuantos juegos hay en el carrito
      $sqlIdCart = "SELECT Games_id FROM cart WHERE USERS_Username = '$username'";
      $resultId = $conn->query($sqlIdCart);
      $rowcount = mysqli_num_rows($resultId);
      //echo $rowcount;
      //Obtener y conectar cart y games con el id del juego en cart.
      $x =0;
      for ($x=0; $x<$rowcount;$x++){
      $id = $resultId->fetch_assoc();
      $finalid = $id['Games_id'];
      //Utilizando el id obtenido, obtener el nombre Y precio del juego.
      $sqlName = "SELECT Name FROM games INNER JOIN cart ON games.id = cart.Games_id WHERE Games_id = $finalid";
      $sqlPrecio = "SELECT Price FROM games WHERE id = $finalid";
      $resultNombre = mysqli_query($conn, $sqlName);
      $resultPrecio = mysqli_query($conn, $sqlPrecio);
      $nombre = mysqli_fetch_array($resultNombre);
      $precio = mysqli_fetch_array($resultPrecio);
      //Imprimir carrito en la pagina
      echo'<tr>';
      echo'<td>'.$nombre['Name'].'</td>';
      echo'<td>'.$precio['Price'].'<img src="Placeholder/Yepez.png" height="15" height="3" hspace="5" style="margin-left:5px"></td>';
      echo'<td><a href="deletecart.php?hashtag='.$finalid.'">Borrar Juego</a></td>';
      echo'</tr>';
    }//for
      echo'<tr>';
      echo'<td>Total:</td>';
      //Sumar precios
      $sqlTotal = "SELECT SUM(Price) AS TotalPrice FROM games INNER JOIN cart ON games.id = cart.Games_id WHERE USERS_Username = '$username'";
      $resultTotal = $conn->query($sqlTotal);
      $x = $resultTotal->fetch_assoc();
      echo'<td colspan="2" style="font-weight: bold">'.$x["TotalPrice"].'<img src="Placeholder/Yepez.png" height="25" height="5" hspace="5" style="margin-left:5px"></td>';
      $preciofinal = $x["TotalPrice"];
      echo'</tr>';

      //Boton de finalizar la compra
      echo'<tr>';
        echo'<td colspan="3" align="center"><a href="comprar.php">FINALIZAR COMPRA</a></td>';
        $_SESSION['PrecioFinal'] = $preciofinal;
      echo'</tr>';
    ?>

    </table>
  </body>
</html>
