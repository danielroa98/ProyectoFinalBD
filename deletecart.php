<?php

$conn = mysqli_connect("127.0.0.1", "adminVG", "adminVG.123", "GameStore");
$id = $_GET["hashtag"];
//echo$id;
//echo'<br>';
$sql = "DELETE FROM cart WHERE Games_id =$id";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
<meta http-equiv="refresh" content="0;URL=cart.php" />