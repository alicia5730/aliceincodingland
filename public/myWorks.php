<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesOfTheMenuPages.css">
    <title>My Works</title>
</head>
<body class="bodyOfTheMenuPages">
<a class="back-btn">‹ Back</a>
    <h1>My Works</h1>
    <div id="containerWork">
        <div class="containerProject">
            <h3>Bit-Project: Building a Webshop for Bit Academy</h3>
            <div class="infoProject">
                <img src="img/myWorks_images/bit_project.png" alt="Bit Project Screenshot">
                <article>
                    Our team, Alicia Fernandes, Oscar Lemstra, Sadek Almousawi, Tim Spekking, and Terique Blijden, completed the Bit-Project. We built a functional, responsive webshop for Bit Academy featuring product, account, and contact pages, an admin manager, a product filter, and an "Add to Cart" function. Excluding a payment system and ads, we focused on a seamless user experience. I mainly worked on the front-end of the page, including the menu bar, product page, and cart page. <a href="https://github.com/alicia573/bit" target="_blank" style="text-decoration: none; color: #6391e6; font-style: italic;">Read more.</a>
                </article>
            </div>
        </div>
        <div class="containerProject">
            <h3>BierHier Def Project - Front-end Website</h3>
            <div class="infoProject">
                <img src="img/myWorks_images/bierhier_project.png" alt="BierHier Project Screenshot">
                <article>
                    Zarwa Tariq and I developed the <a href="https://bierhierdef.netlify.app/" target="_blank" style="text-decoration: none; color: #6391e6; font-style: italic;">Bier Hier[click here]</a> website for the student association in Almere. This front-end project aimed to keep students updated on city activities. We created a modern, engaging site with custom Google Fonts, featuring pages for news, concerts, sports, and recipes. Each page had unique headers and a consistent footer. We also included contact information and an "About Us" section with biographies. <a href="https://github.com/alicia573/BierHier" target="_blank" style="text-decoration: none; color: #6391e6; font-style: italic;">Read more.</a>
                </article>
            </div>
        </div>
        <?php
        $projectTitle    = "Escape Room: ICT Experience in 5 Minutes";
        $projectImage    = "escape-room-cake.png";
        $projectImageAlt = "Paper escape room puzzles for ICT orientation";

        $projectOneLiner = "A five-minute physical escape room that introduces prospective ICT students to core ICT skills through playful, low-threshold puzzles.";

        $projectRole  = "Lead visual & interaction designer, puzzle co-designer, test facilitator";
        $projectTeam  = "Team Cake – Alicia Fernandes, Dannii Verweij, Ruben Harmsen, Hazal Kalender";
        $projectTools = "Figma, Word/Google Docs, physical prototyping";

        $projectContext = "This was a second-year ICT assignment in which we designed an escape experience for open days and orientation events.";
        $projectProblem = "Prospective students often experience ICT as abstract and intimidating. Traditional information sessions are passive and fail to give a real feeling of what ICT involves.";
        $projectGoal    = "Create a short, physical escape room that lets visitors experience ICT skills in a playful way, requires no prior knowledge, and fits within a strict five-minute time limit.";

        $personaProfile = "Prospective ICT student (16–20 years old) visiting an open day, curious but unsure which specialization fits them.";
        $personaGoals   = "Get a quick, fun impression of ICT, understand the difference between directions, and feel more confident about their study choice.";
        $personaPains   = "Information overload during open days, fear that ICT is too technical, boredom when activities are long or theoretical.";
        $personaNeeds   = "Short and guided activities that feel achievable, show ICT in action, and end with a clear, motivating payoff (such as opening a safe).";

        $reqMust = <<<HTML
<li>The escape room must be completable within five minutes.</li>
<li>Puzzles must be understandable without spoken explanation.</li>
<li>No prior ICT knowledge should be required.</li>
<li>Each puzzle must yield one clearly readable digit for the final safe code.</li>
<li>The experience uses physical materials: printed puzzles + a physical safe.</li>
HTML;

        $reqShould = <<<HTML
<li>Show a mix of ICT-related thinking: logic, observation, security, and binary reasoning.</li>
<li>Provide visible progress so teams stay motivated.</li>
<li>Be easy to reset and reuse between sessions.</li>
HTML;

        $reqCould = <<<HTML
<li>Offer different difficulty levels for different groups.</li>
<li>Include references to ICT study tracks.</li>
<li>Support Dutch and English versions in the future.</li>
HTML;

        $userFlowIntro = "The player journey is designed to be fast, intuitive, and exciting — ending with the moment the safe opens.";
        $userFlowSteps = <<<HTML
<li>Introduction – The facilitator explains the story and starts the five-minute timer.</li>
<li>Exploration – The team receives four puzzle cards and divides tasks freely.</li>
<li>Solving – Each solved puzzle reveals one digit and its position in the code.</li>
<li>Code entry – The team enters the code into the physical safe.</li>
<li>Resolution – If correct, the safe opens immediately. If not, teams re-check their puzzles.</li>
HTML;

        /* ---- Wireframes (you are using the Figma embed only) ---- */

        $wireframes = <<<HTML
<div class="figma-embed-wrapper">
    <iframe src="https://embed.figma.com/design/MwX4B4mSs8BDB6sobHkA8h/Escape-Room-Schermontwerp?node-id=5-8&embed-host=share" allowfullscreen></iframe>
</div>
HTML;

        /* ---- Hi-Fi Design + Design Rationale ---- */

        $hiFiPoints = <<<HTML
<li><strong>Consistent layout:</strong> All puzzle cards follow the same structure (title → puzzle → hint → code position), reducing cognitive load under time pressure.</li>
<li><strong>Minimal colour palette:</strong> One accent colour highlights hints and code indicators, preventing distraction and guiding attention.</li>
<li><strong>Large titles and clear numbering:</strong> “Question 1–4” helps players understand the structure and required steps instantly.</li>
<li><strong>High contrast + spacious layout:</strong> Ensures readability during busy open days with mixed lighting environments.</li>
<li><strong>Dedicated hint area:</strong> Hints are separated from the puzzle to avoid confusion and improve scanning.</li>
HTML;

        /* ---- Interaction States ---- */

        $testingSetup = "We tested the escape room with 2 student teams (4–6 participants total) from other project groups. Each team received the four puzzle cards and the safe. We observed how much explanation they needed, where confusion occurred, and whether the five-minute time limit was realistic.";

        $testingFindings = <<<HTML
<li><strong>Binary maze confusion:</strong> Players struggled with inconsistent binary lengths. We redesigned the correct path to produce a clear 4-bit code.</li>
<li><strong>Unclear Caesar cipher start:</strong> Adding a starting arrow and spacing improved accuracy immediately.</li>
<li><strong>Logic question confusion:</strong> The original wording led to misinterpretation. We refined the phrasing and hint to make the puzzle fair but still clever.</li>
HTML;

        $iterations = <<<HTML
<li><strong>Binary maze – before → after:</strong> Replaced inconsistent binary paths with a single clear 4-bit pattern.</li>
<li><strong>Caesar cipher – before → after:</strong> Added a starting marker and increased spacing for clarity.</li>
<li><strong>Puzzle set – before → after:</strong> Reduced text, improved readability, and aligned all cards to a shared grid and visual style.</li>
HTML;

        /* ---- Final Result (no demo/video available) ---- */

        $linkPrototype = "";
        $linkDemo = "";
        $linkRepo = "";

        $reflection = "The final escape room consists of four A4 puzzle cards and a physical safe. Because the experience is fully physical, there is no online prototype or demo. The Figma file contains only the visual designs, while the interactions happen live with players. This project taught me how to translate abstract learning goals into a concrete, playful experience. As the lead visual & interaction designer, I created the visual system, structured the puzzle cards, and iterated based on playtest feedback. I learned to argue design choices, apply accessibility principles, and make fast but thoughtful iterations. In the future, I would like to add multiple difficulty levels and a digital companion to track results and player behaviour.";

        $projectId = "escape-room";
        include "Projects-2nd-year.php";

        ?>


    </div>
<script src="js/backButton.js"></script>

</body>
</html>