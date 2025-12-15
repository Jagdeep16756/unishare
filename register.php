<?php
include 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);


$sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')";
mysqli_query($conn, $sql);
header("Location: login.html");
?>