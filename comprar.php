<!DOCTYPE html>

<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="estilo.css">
  <meta charset="utf-8">
  <head>

    <title>Transaccion</title>
   </head>

   <body>
   	<table class="shoppingtable">
   		<tr>
<?php 
	//Obtener fondos de la persona y el precio final
$conn = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");
	session_start();
	$preciofinal = $_SESSION['PrecioFinal'];
	$fondos = $_SESSION['Fondos'];
	$username = $_SESSION['User'];

	//echo 'Fondos disponibles: '.$fondos;
	//echo 'PrecioFinal: '.$preciofinal;

	//Checar si el carrito esta vacio
	if($preciofinal==null){
		echo "<script>alert('No hay productos en tu carrito');</script>";
		echo'<meta http-equiv="refresh" content="0;URL=cart.php" />';
	}

	else{

	$cambio = $fondos - $preciofinal;
	//echo 'Cambio: '.$cambio;

	$sqlCard = "SELECT Number FROM creditcard WHERE OwnerName = '$username'";
	$result = mysqli_query($conn, $sqlCard);
    $cardnumberfetch = mysqli_fetch_array($result);
    $cardnumber = $cardnumberfetch['Number'];
    //echo$cardnumber;

	if($cambio <0){
		echo'<td>Transaccion Fallida!</td>';
		echo'</tr>';
		echo'<tr><td>Fondos insuficientes, la transaccion no se ha podido completar...</td></tr>';
	}
	else{
		echo'<td>Transaccion Completada!</td>';
		echo'</tr>';
		echo'<tr><td>Gracias por comprar en Lolis4All, los siguientes juegos han sido comprados y seran enviados a tu correo.</td></tr>';
		//Imprimir juegos
	  $sqlIdCart = "SELECT Games_id FROM cart WHERE USERS_Username = '$username'";
      $resultId = $conn->query($sqlIdCart);
      $rowcount = mysqli_num_rows($resultId);
      //Obtener y conectar cart y games con el id del juego en cart.
      $x =0;
      for ($x=0; $x<$rowcount;$x++){
      $id = $resultId->fetch_assoc();
      $finalid = $id['Games_id'];
      //Utilizando el id obtenido, obtener el nombre Y precio del juego.
      $sqlName = "SELECT Name FROM games INNER JOIN cart ON games.id = cart.Games_id WHERE Games_id = $finalid";
      $sqlPrecio = "SELECT Price FROM games WHERE id = $finalid";
      $resultNombre = mysqli_query($conn, $sqlName);
      $nombre = mysqli_fetch_array($resultNombre);
      //Imprimir carrito en la pagina
      echo'<tr>';
      echo'<td>'.$nombre['Name'].'</td>';
      echo'</tr>';
}


		$sql = "UPDATE users SET Funds = $cambio WHERE Username = '$username'";
		mysqli_query($conn, $sql);
    	$sqlDelete = "DELETE FROM cart WHERE USERS_Username = '$username'";
		if (mysqli_query($conn, $sqlDelete)) {
		} 
		else {
    echo "Error updating record: " . mysqli_error($conn);
		}
	}
}
 ?>
 <td align="center" ><button onclick="window.location.href = 'home.php';">Regresar a la tienda</button></td>
</table>
 </body>
 </html>