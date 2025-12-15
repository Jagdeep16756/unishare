<?php
session_start();
include "db.php";

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    die("Form not submitted properly");
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed");
}

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    // Plain text password check (for now)
    if ($password === $row['password']) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        header("Location: dashboard.php");
        exit;
    }
}

echo "Invalid login";
?>
