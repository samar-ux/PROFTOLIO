
<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
require_once "db_conn.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
</head>
<body>
<h1>Update Post</h1>
<?php
if (isset($_SESSION['user_id'])) {
    $post_id = $_GET['post_id'];

    $sql = "SELECT * FROM posts WHERE id='$post_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="updatPost.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="post_id" value="<?php echo $row['id']; ?>">

        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>" required><br><br>

        <label for="body">Body:</label><br>
        <textarea id="body" name="body" rows="4" required><?php echo $row['body']; ?></textarea><br><br>

        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*"><br><br>

        <button type="submit">Update Post</button>
    </form>
    <?php
} else {
    // User is not logged in, redirect to login page or display an error message
    echo "Please log in to update posts.";
}
?>
</body>
</html>
