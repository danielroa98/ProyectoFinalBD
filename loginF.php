<!DOCTYPE html>

    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">

    <html lang="sp" dir="ltr" style="font-family:Arial">
        <title>User Login</title>
    
        <body>
        <?php

            //$nombre = $_POST['nombre'];

            $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "TiendaVirtual");

            if ($enlace)
                echo "Conexión exitosa. <br>";

            else
                die("Conexión no exitosa.");

            session_start();

            $username = $_POST['username'];
            $password = $_POST['password'];

         if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            header("Location: homeU.php");
            }

    if (isset($_POST['username']) && isset($_POST['password'])) {
      if ($_POST['username'] == $username && $_POST['password'] == $password) {

        $_SESSION['logged_in'] = true;
        header("Location: session.php");

      }
    }

        ?>
        

        </body>
    </html>