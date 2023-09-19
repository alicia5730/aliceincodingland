
<head>
    <link rel="stylesheet" href="style.css">
    <link rel = "icon" type = "image/png" href = "img/LogoMakr_9pgnAN.png">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Take a pic with proud-Alicia Fernandes</title>
    <meta http-equiv="content-language" content="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            opacity: 0;
            transition: opacity .5s;
        }
    </style>
</head>
<body>

<header id="header">
    <div id="menu" class="menu">
        <a href="index.php" class="text-button">Home</a>
        <span class="text-button" onclick="transitionToPage('Skills.php')">Skills</span>
        <span href="Bio.php" class="text-button">Bio</span>
        <span href="contact.php" class="text-button">Contact</span>
        <span class="text-button" href="CV%20Alicia%20Fernandes.pdf">CV</span>
        <span href="https://github.com/alicia573" class="text-button">Github</span>
        <a href="https://www.linkedin.com/in/alicia-fernandes-747669192" class="text-button">LinkedIn</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()" style="text-align: left">&#9776;</a>
    </div>
</header>
<script>
    window.transitionToPage = function(href) {
        document.querySelector('body').style.opacity = 0
        setTimeout(function() {
            window.location.href = href
        }, 500)
    }

    document.addEventListener('DOMContentLoaded', function(event) {
        document.querySelector('body').style.opacity = 1
    })

</script>