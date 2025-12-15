<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
</head>
<body>
    <?php
session_start();
include 'db.php';
if(isset($_POST['submit'])){
$subject = $_POST['subject'];
$year = $_POST['year'];
$type = $_POST['type'];
$file = $_FILES['file']['name'];
$path = "uploads/".$file;


move_uploaded_file($_FILES['file']['tmp_name'], $path);


mysqli_query($conn, "INSERT INTO notes(user_id,subject,year,type,file) VALUES('$_SESSION[user_id]','$subject','$year','$type','$file')");
}
?>
<style>
.center-button {
    min-height: 100vh;          /* full screen height */
    display: flex;
    justify-content: center;    /* horizontal center */
    align-items: center;        /* vertical center */
}
.center-button form {
    text-align: center;   /* centers button */
}
</style>

<div class = "center-button">
<form method="POST" enctype="multipart/form-data">
<input name="subject" placeholder="Subject">
<input name="year" placeholder="Year">
<select name="type"><option>Notes</option><option>PYQ</option></select>
<input type="file" name="file"><br>
<br>
<button name="submit">Upload</button>
</form>

</div>


</body>
</html>