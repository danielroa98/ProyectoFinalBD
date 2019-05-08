<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

    <link rel="stylesheet" href="styleFINAL.css">
    <meta charset="utf-8">

    <html lang="sp" dir="ltr" style="font-family:Arial">
        <title>User Login</title>

        <body>
        <?php
            //$nombre = $_POST['nombre'];

            $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

            if ($enlace)
                echo "Conexión exitosa. <br>";

            else
                die("Conexión no exitosa.");

            //$result_query = mysqli_query($enlace, "SELECT * FROM gamestore.users WHERE Username = '".$_POST["username"]."' AND Password = '".$_POST["password"]."';");

            $result_query = mysqli_query($enlace, "SELECT * FROM gamestore.users WHERE Username = '".$_GET["username"]."';");

            //valor de hash = $hash

            if ($result_query) {

             while($row = mysqli_fetch_array($result_query)) {

                $username = $row["Username"];
                $passwordHASH = $row["Password"];

                //session_start();
                $_SESSION['User'] = $username;

                $passwordDEHASH = password_verify($_GET["password"], $passwordHASH);

                if ($passwordDEHASH == true) {

                    $tipoUser = $row["UserType"];

                    if($tipoUser == 'admin'){
                    header("Location: homeA.php");
                     }  
                     else
                        header("Location:home.php");

                } else {
                    //header("Location: passwordERROR.php");
                    echo"Incorrect password";
                }

            }//fin while
                }//fin $result_query
            else {
                echo "ERROR...USER DOESN'T EXIST";
             }



        ?>


        </body>
    </html>
