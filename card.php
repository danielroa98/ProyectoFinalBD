<!DOCTYPE html>
<html lang="en" dir="ltr">

  <link rel="stylesheet" href="estilo.css">
  <meta charset="utf-8">
  <head style="font-family:Arial">

    <title>Add New Card</title>

    <header>
      <div class="topnav">
      <?php
      session_start();
      $username = $_SESSION['User'];
      $fondos = $_SESSION['Fondos'];

      echo'<a href="login.php">Log Out</a>';
      echo'<a>';
        echo'<form action="/ProyectoFinal/homeS.php" method="get">';
        echo'<input type="text" name="gamename">';
        echo'<input type="submit" value="Submit">';
        echo'</form>';
        echo'</a>';
      echo'<a href="cart.php"><img src="shopping-cart.png"></a>';
      echo'<a href="funds.php">Add Funds</a>';
      echo'<a class="active" href="card.php">Add CreditCard</a>';

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
  <body style="font-family:Arial">

    <h2 style="text-align:center" class="pricetxt">Please insert the following information:</h2>

    <form name="add_card" action="newCard.php" method="post">

    <table class="finaltable">
      <tr>
    <td>Credit Card Number:</td>
    <td><input type="text" name="ccNum"></input></td>
      </tr>

      <tr>
    <td>Expiration Date (MM/YY):</td>
    <td><input type="text" name="expDate"></input></td>
      </tr>

      <tr>
    <td>Security Code</td>
    <td><input type="text" name="ccV"></input></td>
      </tr>

      <tr>
    <td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
      </tr>
    </table>

    </form>
  </body>
</html>
