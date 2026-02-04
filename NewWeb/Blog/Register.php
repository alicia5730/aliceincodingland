<?php
include_once "functions.php";
include  "Header.php";
$message = '';

if (isset($_POST['name'], $_POST['surname'], $_POST['dateofbirth'], $_POST['email'], $_POST['password'], $_POST['passwordVerify'])) {
    registerUser(
        connectDb(),
        $_POST['name'],
        $_POST['surname'],
        $_POST['dateofbirth'],
        $_POST['email'],
        $_POST['password'],
        $_POST['passwordVerify'],
        $message
    );

} ?>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
<div id="wrap-pijl">
    <a href="index.php" id="pijl">&#8592;</a>
</div>
    <div id="formDiv">
        <form action="Register.php" method="post" class="form">
            <p id="reg-title">Register</p>
            <label>
               <input type="text" name="name" class="fields" required placeholder="Enter your name">
            </label>
            <label>
                <input type="text" name="surname" class="fields" required placeholder="Enter your Surname">
            </label>
            <label for="dateofbirth">
                Date of Birth<br><input type="date" name="dateofbirth" class="register-fields"  required>
            </label>
            <label>
                <input type="text" name="email" class="fields" placeholder="Enter your email">
            </label>
            <label>
                <input type="password" name="password" class="fields" placeholder="Create password">
            </label>
            <label>
                <input type="password" name="passwordVerify" class="fields" placeholder="Confirm Password">
            </label>
            <label>
                <button type="submit" name="submit" class="sub-button">Submit</button>
            </label>
            <?php
            echo $message;
            ?>
        </form>
    </div>
</body>
</html>