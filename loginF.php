<!DOCTYPE html>

    <link rel="stylesheet" href="style.css">
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

            $result_query = mysqli_query($enlace, "SELECT * FROM gamestore.users WHERE Username = '".$_POST["username"]."';");

            //valor de hash = $hash

            if ($result_query) {

             while($row = mysqli_fetch_array($result_query)) {

                $username = $row["Username"]; 
                $passwordHASH = $row["Password"]; 

                $passwordDEHASH = password_verify($_POST["password"], $passwordHASH);

                if ($passwordDEHASH == true) {

                    $tipoUser = $row["UserType"];

                    if($tipoUser == 'admin'){
                    header("Location: homeA.php");
                     }
                     else
                        header("Location: homeU.php");

                } else {
                    header("Location: passwordERROR.php");
                }

            }//fin while
                }//fin $result_query
            else {
                echo "ERROR...USER DOESN'T EXIST";
             }

            

        ?>
        

        </body>
    </html>