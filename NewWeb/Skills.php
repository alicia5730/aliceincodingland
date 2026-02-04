<?php
require "Header.php";
?>

<div id="skills-info" class="pages-background" style="height: auto;text-align: center;">
    <h1>Skills</h1>
    <div class="wrapper-skills">
        <div class="card">
            <img src="../img/trees.jpg" alt="" >
            <div class="info">
                <h1>PHP</h1>
                <p>PHP is a language I used during my first year in ROC MBO Flevoland(Software development). I also did my end project using php.</p>
            </div>
        </div>

        <div class="card">
            <img src="../img/beach.jpg" alt="">
            <div class="info">
                <h1>SQL</h1>
                <p>This language is something I really like to use while working with databases and have fun while making the tables and see what kind of query to use.</p>
            </div>
        </div>

        <div class="card">
            <img src="../img/book.jpg" alt="">
            <div class="info">
                <h1>HTML/CSS</h1>
                <p>HTML and CSS are the most used languages, and I am also part of the people who uses this language a lot. I have first worked with it in my first year.</p>
            </div>
        </div>
        <div class="card">
            <img src="../img/potrait.jpg" alt="">
            <div class="info">
                <h1>Command Line Proficiency</h1>
                <p>During my college years, I have used the command lines. To find specific files or for some other quests.</p>
            </div>
        </div>

    </div>
</div>
<script>

    document.addEventListener("DOMContentLoaded", function() {
        // Check if the user has visited the page before
        if (!localStorage.getItem('visitedBefore')) {
            // If not, add the simulate-hover class to the first card
            const firstCard = document.querySelector('.card');
            if (firstCard) {
                firstCard.classList.add('simulate-hover');
            }

            // Set the visitedBefore flag in localStorage
            localStorage.setItem('visitedBefore', 'true');
        }
    });

</script>