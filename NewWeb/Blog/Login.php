<?php
include_once "functions.php";
include  "Header.php";

if (isset($_SESSION['ID'])) {
    if (isset($_SESSION['name'])) {
        $pagetitle = $_SESSION['name'];

        header("Location: UserDashboard.php?pagetitle=$pagetitle");
        exit();
    }else{
        header("Location: UserDashboard.php");
        exit();
    }
}
$message = '';
if (isset($_POST['email'],$_POST['password'])) {
    validateUser(connectDb(),$_POST['email'],$_POST['password'],$message);
}

?>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div id="wrap-pijl">
    <a href="index.php" id="pijl">&#8592;</a>
</div>
<div id="formDiv">
    <form action="Login.php" method="post" class="form">
        <p id="reg-title">Login</p>
        <label>
            <input type="text" name="email" class="fields" placeholder="Enter your email">
        </label>
        <label>
            <input type="password" name="password" class="fields" placeholder="Enter your password">
        </label>
        <label>
            <button type="submit" name="submit" class="sub-button">Submit</button>
        </label>
        <?php
        echo "<p id='message'>".$message."</p>";
        ?>
    </form>

</div>
</body>
</html>


