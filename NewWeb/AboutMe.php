<?php
require "Header.php";
$dateOfBirth = "05-07-2003";
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));
?>

<div id="aboutMe" class="pages-background" style="height: auto; text-align: left">
    <h1>About Me</h1>
    <div id="aboutMePacket">
        <article id="article">
            Hello, my name is Alicia Fernandes and I am excited to share with you my journey as a Full-Stack Developer. I have always been passionate about technology and its ability to change the world. My journey began in 2019 when I enrolled in a Software Developer program. During this time, I discovered my love for coding and the joy of creating something from scratch. Since then, I have been on a mission to find new and innovative ways to develop better software.<br><br>
            In 2022, I graduated from ROC MBO Almere Buiten, where I had the opportunity to work on several exciting projects. One of my favorites was a web application that helped small business owners manage their inventory more efficiently. This project taught me the importance of listening to the needs of the end-users and how to deliver a product that meets their needs.<br><br>
            Currently, I am studying HBO-ICT at Windesheim Almere, where I am expanding my knowledge of software development and learning new skills. In my free time, I love to listen to music, and I find inspiration in the beauty of photography. I also enjoy traveling and discovering new cultures.<br><br>
            Thank you for taking the time to read my portfolio, and I look forward to connecting with you soon!
        </article>
        <div id="wrapper-photoAboutMe">
            <img  src="../img/PhotoAlicia.jpg" id="photoAboutMe">
        </div>
    </div>

    <p style="text-decoration: underline"><br></br>Socials </p>
    <div id="socialLogos">
        <a href="../CV%20Alicia%20Fernandes.pdf"><img src="../img/cv.png" class="logo"></a>
        <a href="https://www.linkedin.com/in/alicia-fernandes-747669192" class="text-button"><img src="../img/linkedin.png" class="logo"></a>
        <a href="https://github.com/alicia573" class="text-button"><img src="../img/github.png" class="logo"></a>
    </div>

</div>
