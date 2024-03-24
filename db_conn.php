<?php
$host = "localhost";
$username = "root";
$password = "";
$db_name = "protfolio";

// Create connection
$conn =mysqli_connect("localhost", "root", "", "protfolio");

if ($conn) {
    echo "Connection successfully";
}
else {
      "invalid connection";
}
?>
