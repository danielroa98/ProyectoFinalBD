<!DOCTYPE html>
<html lang="en" dir="ltr">

  <link rel="stylesheet" href="styleFINAL.css">
  <meta charset="utf-8">
  <head style="font-family:Arial">

    <title>Add Funds</title>

    <header>
    <div class="topnav">
      <a href="home.php">Log Out</a>
      <a href="cart.php"><img src="Placeholder/shopping-cart.png"></a>
      <a class="active" href="funds.php">Add Funds</a>
      <a href="card.php">Add CC</a>
      <a href="homeU.php">Home</a>
    </div>

    </header>

  </head>
  <body style="font-family:Arial">

    <h2 style="text-align:center">Pleade insert the following information</h2>

    <form name="add_funds" action="newFunds.php" method="post" style="text-align:left">

    <h4>Credit Card Number</h4>
    <input type="text" name="ccNum"></input>

    <h4>Amount of funds you wish to add:</h4>
    <input type="text" name="funds"></input>

    <br>
    <br>

    <input type="submit" name="accept" value="Accept">

    </form>

  </body>
</html>
