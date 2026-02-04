<?php
session_start();
include "functions.php";

$message = "";

if (!isset($_SESSION['username'])) {
    if (isset($_POST['submit'])) {
        if (makeUsername(connectDb(), $_POST['username'], $_SESSION['ID'], $message)) {
            $_SESSION['username'] = $_POST['username'];
            header('Location: UserDashboard.php');
            exit();
        }
    }
} else {
    header("Location: UserDashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your meta tags, title, etc. go here -->
</head>
<body>
<form action="MakeUsername.php" method="post">
    <input name="username" placeholder="Fill here your username" type="text">
    <button name="submit" type="submit">Submit</button>
    <?php echo "<p id='message'>".$message."</p>"; ?>
</form>
</body>
</html>
