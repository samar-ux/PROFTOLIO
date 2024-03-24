<?php
session_start();
require_once "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $body = $_POST['body'];

    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_path = "images/" . $image_name;

    if (move_uploaded_file($image_tmp, $image_path)) {
        $user_id = $_SESSION['user_id'];

        $sql = "INSERT INTO posts (user_id, title, body, image) VALUES ('$user_id', '$title', '$body', '$image_path')";
        if (mysqli_query($conn, $sql)) {

            header("Location: home.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Failed to upload image.";
    }
}

mysqli_close($conn);
?>
