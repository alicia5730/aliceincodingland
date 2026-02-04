<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
    <link rel = "icon" type = "image/png" href = "img/LogoMakr_9pgnAN.png">
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
</head>
<!--<div id="socialLogos">
    <a href="../CV%20Alicia%20Fernandes.pdf"><img src="../img/cv.png" class="logo"></a>
    <a href="https://www.linkedin.com/in/alicia-fernandes-747669192" class="text-button"><img src="../img/linkedin.png" class="logo"></a>
    <a href="https://github.com/alicia573" class="text-button"><img src="../img/github.png" class="logo"></a>
</div>-->
<div id="menuPlusPage">
<div id="menu">
    <div id="hamburger" onclick="toggleMenu()">
        ☰
    </div>
    <nav id="menuNav">
        <span onclick="transitionToPage('index.php')" class="menu-btn" >Home</span>
        <span onclick="transitionToPage('Skills.php')" class="menu-btn">Skills</span>
        <span onclick="transitionToPage('ProjectInfo.php')" class="menu-btn">Projects</span>
        <span onclick="transitionToPage('AboutMe.php')" class="menu-btn">About Me</span>
    </nav>
</div>
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
    function toggleMenu() {
        const menuNav = document.getElementById('menuNav');
        if (menuNav.style.display === 'none' || menuNav.style.display === '') {
            menuNav.style.display = 'block';
        } else {
            menuNav.style.display = 'none';
        }
    }

    function transitionToPage(pageUrl) {
        window.location.href = pageUrl;
    }

</script>
<div id="wrapper">

