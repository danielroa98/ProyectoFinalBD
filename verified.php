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

            //$conn = mysqli_connect("127.0.0.1", "adminVG", "demo.123", "GameStore");

            $conn = mysqli_connect("127.0.0.1", "adminVG", "demo.123", "GameStore");

            if ($conn){
                echo "Conexión exitosa. <br>";
                $result_query = mysqli_query($conn, "SELECT * FROM gamestore.users WHERE Username = '".$_GET["username"]."';");

            //valor de hash = $hash

            if ($result_query) {

             while($row = mysqli_fetch_array($result_query)) {

                $username = $row["Username"];
                $passwordHASH = $row["Password"];
                //echo$username;

                //session_start();
                $_SESSION['User'] = $username;

                $passwordDEHASH = password_verify($_GET["password"], $passwordHASH);
                if ($passwordDEHASH == true AND $username == $_GET["username"]) {

                    $tipoUser = $row["UserType"];

                    if($tipoUser == 'admin'){
                    header("Location: homeA.php");
                     }  
                     else
                        header("Location:home.php");

                } else {
                    //header("Location: passwordERROR.php");
                    //echo"Incorrect password";
                        echo "<script>alert('Incorrect password');</script>";
                      echo'<meta http-equiv="refresh" content="0;URL=login.php" />';
                }

            }//fin while
                }//fin $result_query
            else {
                echo'ERROR...USER DOESNT EXIST';
                echo "<script>alert('Usuario ingresado no existe');</script>";
                echo'<meta http-equiv="refresh" content="0;URL=login.php" />';
             }
            }

            else{
                echo'ERROR...USER DOESNT EXIST';
                echo "<script>alert('Usuario ingresado no existe');</script>";
                echo'<meta http-equiv="refresh" content="0;URL=login.php" />';
                die("Conexión no exitosa.");
            }

            //$result_query = mysqli_query($conn, "SELECT * FROM gamestore.users WHERE Username = '".$_POST["username"]."' AND Password = '".$_POST["password"]."';");

            



        ?>


        </body>
    </html>
