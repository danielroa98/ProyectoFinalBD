<!DOCTYPE html>

<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <head>

    <title>Main Menu</title>

    <?php

    error_reporting(E_ALL);         //USADO PARA DEBUGEAR
    ini_set('display_errors', 1);

    $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "TiendaVirtual");

    //if ($enlace)
      //echo "Conexión exitosa. <br>";
    //else
      //die("Conexión no exitosa.");

    

  echo'</head>';

  echo'<header>';

    echo'<div class="topnav">';
      echo'<b href="youFoundUs.html">PLACEHOLDER</b>';
      
      echo'<a href="#about">About</a>';
      echo'<a href="#contact">Contact</a>';
      echo'<a href="register.php">New Account</a>';
      echo'<a href="login.php">User login</a>';
      echo'<a class="active" href="#home">Home</a>';
    echo'</div>';

    echo'</header>

  <body style="font-family:Arial">

<h1 align="center" >Lista de juegos</h1>

<div class="row">

    <div class="column"><img src="Placeholder/moonlighter.jpg" height="330" width="220" style ="border: 5px solid #5757e0" ></div>

    <div class="column"><img src="Placeholder/metro2033.jpg" height="330" width="220" style ="border: 5px solid #5757e0" ></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/44/95/48/4495480bb188154737576af6c7763d29.jpg" height="256" width="256" style ="border: 5px solid #5757e0"></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/78/67/69/786769ba329d4fd3f8d3fe4e0b30b850.jpg" height="256" width="256" style ="border: 5px solid #5757e0"></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/ef/b8/c5/efb8c5a0ea3e050ebb67936d451622e6.jpg" height="256" width="256" style ="border: 5px solid #5757e0"></div>


</div>

<div class="row">
    <div class="column"> <table class="tablebox1"> <tr> <td align="center " >Moonlighter</td><td> Ý159.99</td></tr> <tr ></table></div>

    <div class="column"> <table class="tablebox1"> <tr> <td align="center " colspan="2">Metro 2033</td></tr> </table></div>
    
    <div class="column"> <table class="tablebox1"> <tr> <td align="center " colspan="2">POOPY HOLE</td></tr> </table></div>
    
    <div class="column"> <table class="tablebox1"> <tr> <td align="center " colspan="2">POOPY HOLE</td></tr> </table></div>
    
    <div class="column"> <table class="tablebox1"> <tr> <td align="center " colspan="2">POOPY HOLE</td></tr> </table></div>

</div>
    
  </body>';

  ?>
</html>
