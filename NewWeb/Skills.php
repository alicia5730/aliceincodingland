<?php
require "Header.php";
?>

<div id="skills-info" class="pages-background" >
    <h1>Skills</h1>
    <div class="wrapper-skills">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1477666250292-1419fac4c25c?auto=format&fit=crop&w=667&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="" >
            <div class="click-on-me" onclick="hideOnClick('click-on-me')">Click me</div>
            <div class="info">
                <h1>PHP</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1425342605259-25d80e320565?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
            <div class="info">
                <h1>SQL</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1503249023995-51b0f3778ccf?auto=format&fit=crop&w=311&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
            <div class="info">
                <h1>HTML/CSS</h1>
                <p>Lorem Ipsum is simply dummy text from the printing and typeseting industry</p>
            </div>
        </div>

    </div>
</div>
<script>
    function hideOnClick(className) {
        // Get all elements with the specified class name
        const elements = document.querySelectorAll('.' + className);

        // Loop through the list of elements and hide each one
        elements.forEach(element => {
            element.style.display = 'none';
        });
    }
</script>