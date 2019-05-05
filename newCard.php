<!DOCTYPE html>
<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="styleFINAL.css">
  <meta charset="UTF-8">
  <title>New Card</title>

  <header>
    <div class="topnav">
      <a href="home.php">Log Out</a>
      <a href="cart.php"><img src="Placeholder/shopping-cart.png"></a>
      <a href="funds.php">Add Funds</a>
      <a class="active" href="card.php">Add CC</a>
      <a href="homeU.php">Home</a>
    </div>

    </header>

</head>

<body>
  <?php
    error_reporting(E_ALL);         //USADO PARA DEBUGEAR
    ini_set('display_errors', 1);

    $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

      $owner = $_POST['ownName'];
      $noTarjeta = $_POST['ccNum'];
      $finTarjeta = $_POST['expDate'];
      $secCode = $_POST['ccV'];
      //$username = $_POST['username'];

     //$hashP = password_hash($password, PASSWORD_DEFAULT);


    $insert_query = mysqli_query($enlace, "INSERT INTO CREDITCARD (`Number`, `SecurityCode`, `ExpirationDate`, `OwnerName`) VALUES
    ('$noTarjeta', '$secCode', '$finTarjeta', '$owner');");

      echo mysqli_error($enlace);

        echo" ";

        echo"<h3>User: $owner has been added with card number: $noTarjeta</h3>";

        echo"<form name = 'nombre_form' action = 'homeU.php' method = 'post'>

            <h4>Click here to go back</h4>
            <input type ='submit' name='home' value='Home'></input>

        </form>";
      //echo $hash;
    ?>

 </body>
</html>
