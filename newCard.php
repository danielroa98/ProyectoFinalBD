<!DOCTYPE html>
<html lang="en" dir="ltr" style="font-family:Arial">

<<<<<<< HEAD
  <link rel="stylesheet" href="styleFINAL.css">
=======
  <link rel="stylesheet" href="style.css">
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834
  <meta charset="UTF-8">
  <title>New Card</title>

  <header>
<<<<<<< HEAD
    <div class="topnav">
      <a href="home.php">Log Out</a>
=======
    <div class="topnav">   
      <a href="home.php">Log Out</a>  
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834
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
<<<<<<< HEAD

=======
    
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834

    $insert_query = mysqli_query($enlace, "INSERT INTO CREDITCARD (`Number`, `SecurityCode`, `ExpirationDate`, `OwnerName`) VALUES
    ('$noTarjeta', '$secCode', '$finTarjeta', '$owner');");

      echo mysqli_error($enlace);

        echo" ";

        echo"<h3>User: $owner has been added with card number: $noTarjeta</h3>";

<<<<<<< HEAD
        echo"<form name = 'nombre_form' action = 'homeU.php' method = 'post'>

            <h4>Click here to go back</h4>
            <input type ='submit' name='home' value='Home'></input>

        </form>";
=======
        echo"<button type='submit' name='accept' value='Go Home'></button>"
>>>>>>> ffe240d824513c20f2e67020d426a8bf56f64834
      //echo $hash;
    ?>

 </body>
</html>
