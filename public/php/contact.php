<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Perform your form handling logic here (e.g., save to database, send email, etc.)

    echo "Thank you, $name! We have received your message.";
}
?>
