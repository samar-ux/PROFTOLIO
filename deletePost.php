<?php
require_once "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    $sql_delete_post = "DELETE FROM posts WHERE id='$post_id'";
    if (mysqli_query($conn, $sql_delete_post)) {
        header("Location: home.php");
        exit();
    } else {
        echo "Error: " . $sql_delete_post . "<br>" . mysqli_error($conn);
    }
} else {
    header("Location: home.php");
    exit();
}

mysqli_close($conn);
?>
