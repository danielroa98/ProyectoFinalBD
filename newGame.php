<!DOCTYPE html>

    <link rel="stylesheet" href="styleFINAL.css">
    <meta charset="utf-8">

    <html lang="sp" dir="ltr" style="font-family:Arial">
        <title>User Login</title>

        <body>
          <?php
            error_reporting(E_ALL);         //USADO PARA DEBUGEAR
            ini_set('display_errors', 1);

            $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

            if ($enlace)
              echo "Conexión exitosa. <br>";

            else
              die("Conexión no exitosa.");

              $gameID = $_POST['id'];
              $name = $_POST['name'];
              $image = $_POST['image'];
              $description = $_POST['description'];
              $genre = $_POST['genre'];
              $price = $_POST['price'];

            $insert_query = mysqli_query($enlace, "INSERT INTO GAMES (`id`, `Name`, `Image`, `Description`, `Genre`, `Price`) VALUES
            ('$gameID', '$name', '$image', '$description', '$genre', '$price');");

              echo mysqli_error($enlace);

             echo" ";

              header("Location: homeA.php");

              //echo $hash;
            ?>


        </body>
    </html>
