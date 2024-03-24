<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<style>
.nam{
    width: 240px;
    height: 500px;
    background: radial-gradient(rgba(115,12,50,1) 5%, rgba(13,12,12,1) 60%);
    border: none;
    padding: 15px;
    font-size: 1em;
    text-transform: capitalize;
    margin-left: 600px;
    border-radius: 5px;
    margin-top: 5px;
    text-align: center;
}
.ter {
    color: white;
}
.hero{
    color: white;
    font size: 20px;
}
.nemo{

    color: white; 
}
.memo{
    font size:20px;
    color: white;

}


</style>
<body>
    <div class="nam">
<h1 class="ter">Create Post</h1>
<form action="createPost.php" method="post" enctype="multipart/form-data">
    <label class="hero" for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br><br>
    <label class="nemo" for="body">Body:</label><br>
    <textarea id="body" name="body" rows="4" required></textarea><br><br>

    <label class="memo" for="image">Image:</label><br>
    <input class="jeko" type="file" id="image" name="image" accept="image/*" required><br><br>

    <button type="submit">Create Post</button>
</form>
</div>
</body>
</html>
