<!DOCTYPE html>

    <link rel="stylesheet" href="styleFINAL.css">
    <meta charset="utf-8">

    <html lang="sp" dir="ltr" style="font-family:Arial">
        <title>User Login</title>

        <body>
          <?php
            error_reporting(E_ALL);         //USADO PARA DEBUGEAR
            ini_set('display_errors', 1);

            $conn = mysqli_connect("127.0.0.1", "adminVG", "demo.123", "GameStore");

            if ($conn)
              echo "Conexión exitosa. <br>";

            else
              die("Conexión no exitosa.");

              //$gameID = $_POST['id'];
              //session_start();
             // $counterid = $_SESSION['IDCounter'];
              $query = "SELECT id FROM games ORDER BY id DESC LIMIT 1";
              $result = $conn->query($query);
              $row = $result->fetch_assoc();
              $lastid = $row['id'];
              if($lastid == null){
                $counterid = 1;
              }
              else{
                 $counterid = $lastid+1;
              }


                    //$_SESSION['IDCounter'] = $counter;



              $name = $_POST['name'];
              //$image = $_POST['image'];
              //GET IMAGE
$target_dir = "Placeholder/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
              $description = $_POST['description'];
              $genre = $_POST['genre'];
              $price = $_POST['price'];
              $image = $target_dir.basename( $_FILES["fileToUpload"]["name"]);

            $insert_query = mysqli_query($conn, "INSERT INTO GAMES (`id`, `Name`, `Image`, `Description`, `Genre`, `Price`) VALUES
            ('$counterid', '$name', '$image', '$description', '$genre', '$price');");

              echo mysqli_error($conn);

             echo" ";

             header("Location: homeA.php");

              //echo $hash;
            ?>


        </body>
    </html>
