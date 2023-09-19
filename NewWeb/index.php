<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&display=swap" rel="stylesheet">
    <link rel = "icon" type = "image/png" href = "../img/LogoMakr_9pgnAN.png">
    <link href="testStyle.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
</head>
    <body style="opacity: inherit; transition: opacity 0s;">
    <div id="socialLogos">
        <a href="../CV%20Alicia%20Fernandes.pdf"><img src="../img/cv.png" class="logo"></a>
        <a href="https://www.linkedin.com/in/alicia-fernandes-747669192" class="text-button"><img src="../img/linkedin.png" class="logo"></a>
        <a href="https://github.com/alicia573" class="text-button"><img src="../img/github.png" class="logo"></a>
    </div>
    <div id="wrapper" class="wrapperIndex">
        <div id="profile-images">
            <p class="name">Alicia </br>Fernandes</p>
                <img class="profile-photo" src="../img/ProfilePhoto.jpg" alt="profile-photo">
        </div>
        <div class="arrow-indicator">&#8595;</br> <p style="font-size: 12px; font-style: oblique">Click On Me</p></div>
        <div id="container-cards">
            <div class="photocard" >
                <button name="skills" class="btn square"><a href="Skills.php" class="text-button">Skills</a></button>
            </div>
            <div class="cute-line">
                <div class="decoration decoration-start"></div>
                <div class="line-body"></div>
                <div class="decoration decoration-end"></div>
            </div>

            <div class="photocard">
                <button name="projects" class="btn square"><a href="ProjectInfo.php" class="text-button" style="text-decoration: none">Projects</a></button>
            </div>
            <div class="cute-line">
                <div class="decoration decoration-start"></div>
                <div class="line-body"></div>
                <div class="decoration decoration-end"></div>
            </div>
            <div class="photocard">
                <button name="about" class="btn square"><a href="AboutMe.php" class="text-button"> About Me</a></button>
            </div>

        </div>
    </div>

    </body>
    <script>
        document.querySelector('.arrow-indicator').addEventListener('click', function() {
            var cardsContainer = document.querySelector('#container-cards');

            // If the container is not already active, add the active class to it
            if (!cardsContainer.classList.contains('active')) {
                cardsContainer.classList.add('active');
            } else { // If it is active, remove the active class to hide it
                cardsContainer.classList.remove('active');
            }
        });
        document.querySelector('.arrow-indicator').addEventListener('click', function() {
            var cardsContainer = document.querySelector('#container-cards');

            cardsContainer.scrollIntoView({ behavior: 'smooth' });
        });
        var cardsContainer = document.querySelector('#container-cards');
        var arrow = document.querySelector('.arrow-indicator');

        arrow.addEventListener('click', function() {
            if (arrow.classList.contains('clicked')) {
                arrow.classList.remove('clicked');
            } else {
                arrow.classList.add('clicked');
            }
        });


    </script>
</html>
