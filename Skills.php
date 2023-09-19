<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . "/header.php"; ?>

<div id="wrapper">
        <section id="Geleerd" >
            <h1>What have I learned at my institute:</h1><br>
            <section id="mg-section" class="slide">
                <h4>I have made this game with JS, CSS and HTMl. It is a Memory Game.
                    This Memory Game was assignment in the classroom Javascript. We were given
                    a lot of assignments in the classroom, but I thought that this was the best result out of the whole classroom.
                </h4>
                <a href="https://memorygameaf.netlify.app" class="button-about">MEMORY GAME</a>
<!--                <div id="cheer">
                    <div class="monster"></div>
                    </div>-->
            </section>
            <section id="ap-section" class="slide">
                <h4>
                </h4>
            </section>
        </section>
    <div id="points">
        <section id="Skills">
            <ul id="list-skills">
                <h1>Skills</h1>
                <li><h3>SQL &#9733;&#9733;&#9733;&#9734;&#9734;</h3></li>
                <li><h3>HTML/CSS &#9733;&#9733;&#9733;&#9733;&#9734;</h3></li>
                <li><h3>Javascript &#9733;&#9733;&#9733;&#9734;&#9734;</h3></li>
                <li><h3>PHP &#9733;&#9733;&#9733;&#9734;&#9734;</h3></li>
            </ul>
        </section>
        <br>
        <section id="Leren">
            <ul id="list-leren">
                <h1>What do I still need to work on?</h1>
                <li><h3>Frameworks</h3></li>
                <!--<li><h3>C# and C++</h3></li>-->
                <li><h3>Java</h3></li>
                <li><h3>Python</h3></li>
            </ul>
        </section>
        <br>
        <section id="interest">
            <ul id="list-interest">
                <h1>My interests</h1>
                <li><h3>Photography</h3></li>
                <li><h3>web-design</h3></li>
                <li><h3>CSS Animation</h3></li>
            </ul>
        </section>
    </div>
</div>
<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("menu");
        if (x.className === "menu") {
            x.className += " responsive";
        } else {
            x.className = "menu";
        }
    }</script>
</body>
</html>