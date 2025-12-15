<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register and login</title>
</head>
<body>
    <!--for register page frontened-->
    <form action="register.php" method="POST">
<input type="text" name="name" placeholder="Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit">Register</button>
    </form>
    <!--backend for the register page-->
    <?php
include 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);


$sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$pass')";
mysqli_query($conn, $sql);
header("Location: login.html");
    ?>
    
    <!-- frontend for login-->
    <form action="login.php" method="POST">
<input type="email" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<button>Login</button>
     <!--backend for login-->
     <?php
session_start();
include 'db.php';
$email = $_POST['email'];
$password = $_POST['password'];


$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($result);


if ($user && password_verify($password, $user['password'])) {
$_SESSION['user_id'] = $user['id'];
header("Location: dashboard.php");
} else {
echo "Invalid login";
}
?>


</form>
</body>
</html>