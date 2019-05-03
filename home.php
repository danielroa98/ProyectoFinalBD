<!DOCTYPE html>

<html lang="en" dir="ltr" style="font-family:Arial">

  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <head>

    <title>Main Menu</title>

    <?php

    error_reporting(E_ALL);         //USADO PARA DEBUGEAR
    ini_set('display_errors', 1);

    $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

    //if ($enlace)
      //echo "Conexión exitosa. <br>";
    //else
      //die("Conexión no exitosa.");

    ?>

  </head>

  <header>

    <div class="topnav">
      
      <a href="cart.php"><img src="Placeholder/shopping-cart.png"></a>
      <a href="register.php">Sign up</a>
      <a href="login.php">Login</a>
      <a class="active" href="#home">Home</a>
    </div>

    </header>

  <body style="font-family:Arial">

<!–– Title ––>
<h1 align="center" style="color:rgb(219, 216, 210);">LA MANSION DE LOLIS DE MEGU</h1>
<!–– Row 1 ––>
<!–– Imagenes ––>
<div class="row">

    <div class="column"><img src="Placeholder/moonlighter.jpg" height="330" width="220" style ="border: 5px solid #362f32" ></div>

    <div class="column"><img src="Placeholder/metro2033.jpg" height="330" width="220" style ="border: 5px solid #362f32" ></div>
    
    <div class="column"><img src="https://www.mobygames.com/images/covers/l/343684-atelier-sophie-the-alchemist-of-the-mysterious-book-limited-edition-playstation-4-front-cover.jpg" height="330" width="220" style ="border: 5px solid #362f32"></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/78/67/69/786769ba329d4fd3f8d3fe4e0b30b850.jpg" height="330" width="220" style ="border: 5px solid #362f32"></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/ef/b8/c5/efb8c5a0ea3e050ebb67936d451622e6.jpg" height="330" width="220" style ="border: 5px solid #362f32"></div>


</div>

<!–– Cajitas con nombre/precio ––>
<div class="row">
    <div class="column1"> 
      <table class="tablebox1"> 
        <tr> 
          <td align="center " >Moonlighter</td>
          <td> Ý159.99</td>
        </tr>

        <tr>
          <td align="center " colspan="2"><a href="http://moonlighterthegame.com/">COMPRAR</a></td>
        </tr>
        </table>
      </div>

    <div class="column1"> 
      <table class="tablebox1">
       <tr>
        <td align="center " colspan="2">Metro 2033</td>
      </tr> 
    </table>
  </div>
    
    <div class="column1">
     <table class="tablebox1"> 
      <tr> 
        <td align="center " colspan="2">POOPY HOLE</td>
      </tr> 
    </table>
  </div>
    
    <div class="column1">
     <table class="tablebox1"> 
      <tr> 
        <td align="center " colspan="2">POOPY HOLE</td>
      </tr>
       </table>
     </div>
    
    <div class="column1"> 
      <table class="tablebox1"> 
        <tr> 
          <td align="center " colspan="2">POOPY HOLE</td>
        </tr> 
      </table>
    </div>

</div>
    
    <!–– Row 2 ––>
    <br><br><br><br><br><br>

    <!–– Imagenes ––>
<div class="row">

    <div class="column"><img src="https://i.pinimg.com/564x/d4/1d/17/d41d170fbbd13ec66118ff8479562007.jpg" height="330" width="220" style ="border: 5px solid #362f32" ></div>

    <div class="column"><img src="https://i.pinimg.com/564x/45/e8/a9/45e8a941a2032984fd98496ac65fee20.jpg" height="330" width="220" style ="border: 5px solid #362f32" ></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/a8/fe/34/a8fe345ba8c8c178b2a303cbbd1dd334.jpg" height="330" width="220" style ="border: 5px solid #362f32"></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/fc/06/9b/fc069b4692011c03bcc930a64ac35b65.jpg" height="330" width="220" style ="border: 5px solid #362f32"></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/16/e4/61/16e461bdad5e3adc7ca2c5ff2544c4af.jpg" height="330" width="220" style ="border: 5px solid #362f32"></div>
</div>
<!–– Cajitas con nombre/precio ––>
<div class="row">
    <div class="column1"> 
      <table class="tablebox1"> 
        <tr> 
          <td align="center " >Moonlighter</td>
          <td> Ý159.99</td>
        </tr>

        <tr>
          <td align="center " colspan="2"><a href="http://moonlighterthegame.com/">COMPRAR</a></td>
        </tr>
        </table>
      </div>

    <div class="column1"> 
      <table class="tablebox1">
       <tr>
        <td align="center " colspan="2">Metro 2033</td>
      </tr> 
    </table>
  </div>
    
    <div class="column1">
     <table class="tablebox1"> 
      <tr> 
        <td align="center " colspan="2">POOPY HOLE</td>
      </tr> 
    </table>
  </div>
    
    <div class="column1">
     <table class="tablebox1"> 
      <tr> 
        <td align="center " colspan="2">POOPY HOLE</td>
      </tr>
       </table>
     </div>
    
    <div class="column1"> 
      <table class="tablebox1"> 
        <tr> 
          <td align="center " colspan="2">POOPY HOLE</td>
        </tr> 
      </table>
    </div>

</div>

    <!–– Row 3 ––>
    <br><br><br><br><br><br>

    <!–– Imagenes ––>
<div class="row">

    <div class="column"><img src="https://i.pinimg.com/564x/f0/04/21/f00421e292681613be092209e6e2fde6.jpg" height="330" width="220" style ="border: 5px solid #362f32" ></div>

    <div class="column"><img src="https://i.pinimg.com/564x/97/3f/d1/973fd13f543af101e665da6bc3a20982.jpg" height="330" width="220" style ="border: 5px solid #362f32" ></div>
    
    <div class="column"><img src="https://steamuserimages-a.akamaihd.net/ugc/940560026041862778/C0A604EE84C4DA243528D087D36BF9965D0E548F/" height="330" width="220" style ="border: 5px solid #362f32"></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/4f/bc/6d/4fbc6d1efb03f7d02fb96b9ac9a12e86.jpg" height="330" width="220" style ="border: 5px solid #362f32"></div>
    
    <div class="column"><img src="https://i.pinimg.com/564x/e0/58/69/e0586902672a05be08686b8e4e62a999.jpg" height="330" width="220" style ="border: 5px solid #362f32"></div>
</div>
<!–– Cajitas con nombre/precio ––>
<div class="row">
    <div class="column1"> 
      <table class="tablebox1"> 
        <tr> 
          <td align="center " >Moonlighter</td>
          <td> Ý159.99</td>
        </tr>

        <tr>
          <td align="center " colspan="2"><a href="http://moonlighterthegame.com/">COMPRAR</a></td>
        </tr>
        </table>
      </div>

    <div class="column1"> 
      <table class="tablebox1">
       <tr>
        <td align="center " colspan="2">Metro 2033</td>
      </tr> 
    </table>
  </div>
    
    <div class="column1">
     <table class="tablebox1"> 
      <tr> 
        <td align="center " colspan="2">POOPY HOLE</td>
      </tr> 
    </table>
  </div>
    
    <div class="column1">
     <table class="tablebox1"> 
      <tr> 
        <td align="center " colspan="2">POOPY HOLE</td>
      </tr>
       </table>
     </div>
    
    <div class="column1"> 
      <table class="tablebox1"> 
        <tr> 
          <td align="center " colspan="2">POOPY HOLE</td>
        </tr> 
      </table>
    </div>

</div>
  </body>

</html>