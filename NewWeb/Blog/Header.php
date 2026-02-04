<?php
session_start();
$pagetitle = ""; // Initialize $pagetitle as an empty string

if (isset($_GET['pagetitle'])) {
    $pagetitle = $_GET['pagetitle']; // Set $pagetitle based on the GET parameter
}
?>
<!DOCTYPE html>
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" >
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <title><?php echo $pagetitle ?></title>
    <link href="style.css" rel="stylesheet">
</head>
