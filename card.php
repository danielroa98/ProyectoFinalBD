<!DOCTYPE html>
<html lang="en" dir="ltr">

  <link rel="stylesheet" href="styleFINAL.css">
  <meta charset="utf-8">
  <head style="font-family:Arial">

    <title>Add New Card</title>

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
  <body style="font-family:Arial">

    <h2 style="text-align:center">Pleade insert the following information</h2>

    <form name="add_card" action="newCard.php" method="post">

    <h4>Owner's name</h4>
    <input type="text" name="ownName"></input>

    <h4>Credit Card Number:</h4>
    <input type="text" name="ccNum"></input>

    <h4>Expiration Date (MM/YY):</h4>
    <input type="text" name="expDate"></input>

    <h4>Security Code</h4>
    <input type="text" name="ccV"></input>

    <br>
    <br>

    <input type="submit" name="submit" value="Submit">

    </form>
  </body>
</html>
