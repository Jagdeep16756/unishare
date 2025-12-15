<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view notes</title>
</head>
<body>

 
    <?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM notes ORDER BY id DESC");
while($row = mysqli_fetch_assoc($result)){
echo "<p>{$row['subject']} - <a href='uploads/{$row['file']}'>Download</a>";
if($row['verified']) echo " ✔";
echo "</p>";
}
?>
</body>
</html>