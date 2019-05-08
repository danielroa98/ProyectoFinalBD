<!DOCTYPE html>
<html lang="en" dir="ltr">
  <link rel="stylesheet" href="styleFINAL.css">
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <head style="font-family:Arial">

    <title>Add Funds</title>

    <header>
    <div class="topnav">
      <?php
      session_start();
      $username = $_SESSION['User'];
      $fondos = $_SESSION['Fondos'];

      echo'<a href="login.php">Log Out</a>';
      echo'<a href="cart.php"><img src="shopping-cart.png"></a>';
      echo'<a class="active" href="funds.php">Add Funds</a>';
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
  <body style="font-family:Arial">

    <h2 style="text-align:center" class="pricetxt">Please insert the following information</h2>

    <form name="add_funds" action="newFunds.php" method="post" style="text-align:left">
<table>
    <tr>
    <td>Credit Card Number</td>
    <td><input type="text" name="ccNum"></input></td>
    </tr>

    <tr>
    <td>Amount of funds you wish to add:</td>
    <td><input type="text" name="funds"></input></td>
    </tr>

    <tr>
    <td align="right" colspan="2"><input type="submit" name="accept" value="Accept"></td>
    </tr>
</table>
    </form>

  </body>
</html>
