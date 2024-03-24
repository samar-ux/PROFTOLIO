<?php
session_start();
require_once "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST['post_id'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    if (!empty($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_path = "images/" . $image_name;

        if (!move_uploaded_file($image_tmp, $image_path)) {
            echo "Failed to upload image.";
            exit();
        }
    }

    $sql = "UPDATE posts SET title='$title', body='$body'";
    if (!empty($image_path)) {
        $sql .= ", image='$image_path'";
    }
    $sql .= " WHERE id='$post_id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
