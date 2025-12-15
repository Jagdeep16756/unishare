<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>like system</title>
</head>
<body>
   <?php
session_start();
include 'db.php';
$note_id = $_GET['id'];
$user_id = $_SESSION['user_id'];


$check = mysqli_query($conn, "SELECT * FROM likes WHERE user_id='$user_id' AND note_id='$note_id'");
if(mysqli_num_rows($check)==0){
mysqli_query($conn, "INSERT INTO likes(user_id,note_id) VALUES('$user_id','$note_id')");
mysqli_query($conn, "UPDATE notes SET likes = likes+1 WHERE id='$note_id'");
}
header("Location: notes.php");
?> 
</body>
</html>