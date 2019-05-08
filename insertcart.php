<!DOCTYPE html>
<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <head>
  	<title>Juego Agregado</title>
  </head>

  <body>
<?php

?>

  	<table class="tableshopping">
  		<tr>
  			<td align="center" colspan="2">CARRITO</td>
  		</tr>
  		
  		<tr>
<?php
// Start the session
session_start();
$username = $_SESSION['User'];
$conn = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");
$id = $_GET["hashtag"];
//echo$id;
//echo'<br>';
$sql = "INSERT INTO cart (USERS_Username,GAMES_id) VALUES ('$username','$id')";


$sqlGameName = "SELECT Name FROM games WHERE id = $id";
$result = mysqli_query($conn, $sqlGameName);
$rs = mysqli_fetch_array($result);

if(!mysqli_query($conn,$sql)){
	//echo'Not Inserted';
	$success = $rs['Name']." ya esta en tu carrito de compras...";
}
else{
	//echo'Inserted';
	$success = $rs['Name']." agregado exitosamente al carrito de compras";
}

echo'<td align="center" colspan="2">'.$success.'</td>';
?>
  		</tr>
  		<tr>
  			<td align="center" ><button onclick="window.location.href = 'home.php';">Regresar a la tienda</button></td>
  			<td align="center" ><button onclick="window.location.href = 'cart.php';">Ir al carrito de compras</button></td>
  		</tr>

  	</table>

</body>
</html>