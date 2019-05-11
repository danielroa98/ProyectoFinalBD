<!DOCTYPE html>

    <link rel="stylesheet" href="styleFINAL.css">
    <meta charset="utf-8">

    <html lang="sp" dir="ltr" style="font-family:Arial">
        <title>Remove Game</title>

        <body>
          <?php
            error_reporting(E_ALL);         //USADO PARA DEBUGEAR
            ini_set('display_errors', 1);

            $enlace = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");

            if ($enlace)
              echo "Conexión exitosa. <br>";

            else
              die("Conexión no exitosa.");
/*
              $Name = $_POST['name'];
              echo$Name;
*/
              //DELETE FROM `gamestore`.`games` WHERE (`id` = '00000005');
              $id = $_GET["hashtag"];
              echo$id;
              $sqlDelete = "DELETE FROM GAMES WHERE id = '$id'";
                
              if (mysqli_query($enlace, $sqlDelete)) {
                      //echo'Succes!';
                      //echo "<script>alert('".$Name." eliminado de la tienda');</script>";
                      echo'<meta http-equiv="refresh" content="0;URL=homeA.php" />';
      
              } 
              else {
                      echo "Error updating record: " . mysqli_error($conn);
              }

              /*
              $getid = "SELECT id FROM GAMES WHERE Name = '$Name'";
              $result = mysqli_query($enlace, $getid);
              //$rs = mysqli_fetch_array($result);
              if ($rs = mysqli_fetch_array($result)) {
                echo'ID Encontrado';

              } 
                   
              else {
                       echo "<script>alert('El juego ingresado no existe');</script>";
                      echo'<meta http-equiv="refresh" content="0;URL=formRG.php" />';
              }


                    

  

              //echo mysqli_error($enlace);

             //echo" ";

              //header("Location: homeA.php");

              //echo $hash;
              */
            ?>


        </body>
    </html>
