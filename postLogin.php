<?php
session_start();

require_once "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($conn, $email);

    $sql_check_email = "SELECT * FROM users WHERE email='$email'";
    $result_check_email = mysqli_query($conn, $sql_check_email);
    if (!$result_check_email) {
        // Query error occurred
        echo "Error: " . mysqli_error($conn);
        exit();
    }

    if (mysqli_num_rows($result_check_email) > 0) {
        $row = mysqli_fetch_assoc($result_check_email);
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['logged_in'] = true;
            header("Location: home.php");
            exit();
        } else {
            // Password is incorrect
            header("Location: login.php?error=Incorrect password");
            exit();
        }
    } else {
        // Email does not exist
        header("Location: login.php?error=Email not found");
        exit();
    }
}
?>
