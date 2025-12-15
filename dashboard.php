<?php
session_start();

/* Protect dashboard */
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>UniShare Dashboard</title>
</head>
<body>
  
<style>
h1{text-align: center;}
p{text-align: center;}

p{vertical-align: text-bottom;}
.bottom-text {
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align: center;
    background: #f1f1f1;
    padding: 10px;}

.center-link {
    text-align: center;}


.dashboard-container {
    position: absolute;
    left: 25%;
    top: 50%;
    transform: translateY(-50%);
}

.left-text h1 {
    font-size: 64px;
    font-weight: bold;
    color: #1e2a78;
    margin-bottom: 10px;
}

.left-text p {
    font-size: 22px;
    color: #444;
}



body{
    margin: 0;
    min-height: 100vh;
    
    background-image: url("man_with_computer.png");
    background-size:  60%; /* cover full screen */
    background-position: 60% center;
    background-repeat: no-repeat; /* no repeat */
}
</style>
<h1>Unishare Dashboard</h1>
<a href="upload.php">Upload Notes</a>|
<a href="notes.php">View Notes</a>


<div class="bottom-text">
<p>You are successfully logged in.</p>
<a href="logout.php" style="color:red; font-weight:bold;">Logout</a>

</div>

<div class="dashboard-container">
    
    <!-- LEFT TEXT -->
    <div class="left-text">
        <h1>Welcome to<br>UniShare</h1>
        <p>Share • Learn • Grow</p>
    </div>
<!--
<div class = "center-link">
<a href="upload.php">Upload Notes</a>|<br>
<a href="notes.php">View Notes</a>
</div>
-->
</body>
</html>
