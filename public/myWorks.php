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


        $wireframes = <<<HTML
<div class="figma-embed-wrapper">
    <iframe src="https://embed.figma.com/design/MwX4B4mSs8BDB6sobHkA8h/Escape-Room-Schermontwerp?node-id=5-8&embed-host=share" allowfullscreen></iframe>
</div>
HTML;


        $hiFiPoints = <<<HTML
<li><strong>Consistent layout:</strong> All puzzle cards follow the same structure (title → puzzle → hint → code position), reducing cognitive load under time pressure.</li>
<li><strong>Minimal colour palette:</strong> One accent colour highlights hints and code indicators, preventing distraction and guiding attention.</li>
<li><strong>Large titles and clear numbering:</strong> “Question 1–4” helps players understand the structure and required steps instantly.</li>
<li><strong>High contrast + spacious layout:</strong> Ensures readability during busy open days with mixed lighting environments.</li>
<li><strong>Dedicated hint area:</strong> Hints are separated from the puzzle to avoid confusion and improve scanning.</li>
HTML;


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


        $linkPrototype = "";
        $linkDemo = "";
        $linkRepo = "";

        $reflection = "The final escape room consists of four A4 puzzle cards and a physical safe. Because the experience is fully physical, there is no online prototype or demo. The Figma file contains only the visual designs, while the interactions happen live with players. This project taught me how to translate abstract learning goals into a concrete, playful experience. As the lead visual & interaction designer, I created the visual system, structured the puzzle cards, and iterated based on playtest feedback. I learned to argue design choices, apply accessibility principles, and make fast but thoughtful iterations. In the future, I would like to add multiple difficulty levels and a digital companion to track results and player behaviour.";

        $projectId = "escape-room";
        include "Projects-2nd-year.php";

        ?>

        <?php
        $projectTitle    = "Mobile App: Finding and Claiming Meeting Rooms";
        $projectImage    = "Mobile_app.png";
        $projectImageAlt = "Mobile app for finding and claiming meeting rooms";

        $projectOneLiner = "A mobile app concept that helps office users quickly find, filter, claim and navigate to available meeting rooms.";

        $projectRole  = "UX/UI designer";
        $projectTeam  = "Group project – I mainly worked on the UX/UI design, screen structure and interaction flow.";
        $projectTools = "Figma, low-fidelity wireframes, mid-fidelity prototype, high-fidelity prototype";

        $projectContext = "This project focused on designing a mobile application for managing meeting rooms in an office environment. The aim was to create a clear and efficient experience for users who need to quickly find and reserve a suitable room.";
        $projectProblem = "In busy office environments, users often waste time searching for available meeting rooms or arrive at spaces that are already occupied. There is often no clear overview of availability, room capacity or facilities.";
        $projectGoal    = "Design a mobile app that allows users to quickly search for meeting rooms, filter options, view room details, claim a room and navigate to the correct location with as little friction as possible.";

        $personaProfile = "Office employee who needs to find a meeting room on short notice.";
        $personaGoals   = "Quickly find a suitable room, check availability, and reserve it without confusion.";
        $personaPains   = "Lack of overview, uncertainty about room status, wasted time, and frustration when a room is unexpectedly unavailable.";
        $personaNeeds   = "Clear room status, useful filters, fast claiming flow, and reliable feedback after each action.";

        $reqMust = <<<HTML
<li>Users must be able to see whether a room is available or occupied.</li>
<li>Users must be able to claim a room directly from the app.</li>
<li>The app must show practical room details such as capacity and facilities.</li>
<li>The design must include clear feedback after claiming a room.</li>
<li>The app must support route/navigation to the selected room.</li>
HTML;

        $reqShould = <<<HTML
<li>Users should be able to filter rooms based on availability and facilities.</li>
<li>The overview should be easy to scan and understand.</li>
<li>The app should include supporting pages such as notifications, agenda or profile.</li>
HTML;

        $reqCould = <<<HTML
<li>The app could support favourites or saved room preferences.</li>
<li>The app could notify users when a room becomes free.</li>
<li>The app could be expanded with additional team or calendar features.</li>
HTML;

        $userFlowIntro = "The app was designed around a practical and efficient mobile flow.";
        $userFlowSteps = <<<HTML
<li>The user opens the app and views an overview of meeting rooms.</li>
<li>The user filters the list based on availability, capacity or facilities.</li>
<li>The user opens a room detail page to inspect the room more closely.</li>
<li>The user claims the room and receives confirmation.</li>
<li>The user can start the route and navigate to the selected room.</li>
HTML;

        $wireframes = <<<HTML
<div class="wireframe-gallery">

    <!-- Low fidelity placeholder -->
    <div class="wireframe-item">
        <p><strong>Low-fidelity:</strong> Early sketches and wireframes focused on the basic structure of the app, including the room overview, filters and the claiming flow.</p>
        <p class="wireframe-link">
            <a href="https://www.figma.com/design/qJrYJLayOGR9wAfHuKbdXl/Mobile-app-vergaderruimtes--Versie-3?node-id=0-1" target="_blank">
                View low-fidelity prototype in Figma
            </a>        
        </p>
        <div class="figma-embed-wrapper">
        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="https://embed.figma.com/design/qJrYJLayOGR9wAfHuKbdXl/Mobile-app-vergaderruimtes--Versie-3?node-id=0-1&embed-host=share" allowfullscreen></iframe>
        </div>
    </div>

    <!-- Mid fidelity -->
    <div class="wireframe-item">
        <p><strong>Mid-fidelity:</strong> The design became clearer and more detailed, introducing realistic room cards, filters and interaction states.</p>

        <p class="wireframe-link">
            <a href="https://www.figma.com/design/qJrYJLayOGR9wAfHuKbdXl/Mobile-app-vergaderruimtes--Versie-3?node-id=52-134" target="_blank">
                View mid-fidelity prototype in Figma
            </a>
        </p>

        <div class="figma-embed-wrapper">
            <iframe src="https://embed.figma.com/design/qJrYJLayOGR9wAfHuKbdXl/Mobile-app-vergaderruimtes--Versie-3?node-id=52-134&embed-host=share" allowfullscreen></iframe>
        </div>
    </div>

    <!-- High fidelity -->
    <div class="wireframe-item">
        <p><strong>High-fidelity:</strong> The final prototype refined the visual design and made most important buttons and flows interactive.</p>

        <p class="wireframe-link">
            <a href="https://www.figma.com/site/GCq2YktxQrDtl1kCw4NczQ/High-fidelity-2?node-id=0-1&t=SzKP66d3UPCQvvp4-1" target="_blank">
                View high-fidelity prototype in Figma
            </a>
        </p>

        <div class="figma-embed-wrapper">
               <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="https://embed.figma.com/site/GCq2YktxQrDtl1kCw4NczQ/High-fidelity-2?node-id=0-1&embed-host=share" allowfullscreen></iframe>        </div>
    </div>

</div>
HTML;

        $hiFiPoints = <<<HTML
<li><strong>Clear room cards:</strong> each meeting room is presented with essential information such as name, availability and relevant details.</li>
<li><strong>Useful filtering:</strong> users can narrow down options quickly, which supports fast decision-making.</li>
<li><strong>Strong feedback states:</strong> the app communicates when a room is available, claimed or no longer available.</li>
<li><strong>Task-based navigation:</strong> supporting pages such as profile, notifications and agenda make the app feel more complete and realistic.</li>
<li><strong>Mobile-first design:</strong> the interface is designed to make important actions easy to perform on a phone screen.</li>
HTML;

        $testingSetup = "The project was developed iteratively through multiple low-fidelity, mid-fidelity and high-fidelity versions. Feedback from the design process was used to refine the structure, room states and overall clarity of the app.";
        $testingFindings = <<<HTML
<li><strong>Clarity improved over time:</strong> later versions communicate room status more clearly than the first rough concepts.</li>
<li><strong>The claim flow became stronger:</strong> later screens provide clearer confirmation and better feedback around room reservation.</li>
<li><strong>The app became more complete:</strong> the design evolved from a basic room overview into a fuller mobile experience with supporting screens and more realistic interactions.</li>
HTML;

        $iterations = <<<HTML
<li><strong>Low-fidelity – version 1 → version 2:</strong> After receiving feedback from Jozua, I simplified the wireframes by removing long sentences and detailed explanations. I kept only the most important information on each screen, such as room name, availability status and number of people. The rest was replaced with short labels and placeholders, which made the wireframes feel more like true low-fidelity sketches and much easier to scan.</li>

<li><strong>Low-fidelity – version 2 → version 3:</strong> Ruben pointed out that the overall flow was already clear, but that some buttons and text could be placed more logically. Based on that feedback, I adjusted the layout to improve usability and visual hierarchy. For example, I moved the <em>Claim</em> button further to the right so it would be easier to reach on a phone screen, especially in situations where the user needs to act quickly. I also cleaned up parts of the layout to make the overview feel more structured and user-friendly.</li>

<li><strong>Mid-fidelity – map details popup:</strong> Jozua’s feedback confirmed that the flow and visual ideas were already working well, especially the way occupied rooms were shown on the map. Ruben noticed one small usability issue: the popup on the map page was missing a close icon. I added this in the next iteration, which made the interaction more complete and intuitive without changing the overall structure of the design.</li>
<li><strong>High-fidelity – usability improvements after testing:</strong> Based on the results of the usability test, I made several small improvements to make the prototype clearer and easier to use. During testing, some users had to briefly search for certain functions, such as viewing their claims. To improve this, I reviewed the placement and visibility of specific buttons and interface elements. I also paid extra attention to the overall clarity of the screens by structuring content more clearly and making important elements easier to notice. These adjustments made the prototype more intuitive and brought it closer to what users expected.</li>

HTML;
        $linkPrototype = "https://www.figma.com/design/qJrYJLayOGR9wAfHuKbdXl/Mobile-app-vergaderruimtes--Versie-3?node-id=52-134";
        $linkDemo      = "https://www.figma.com/site/GCq2YktxQrDtl1kCw4NczQ/High-fidelity-2?node-id=0-1&t=SzKP66d3UPCQvvp4-1";
        $linkRepo      = "";

        $reflection = "This project helped me improve my UX/UI design process for mobile applications. I learned how to structure a practical user flow, design around room availability and reservation states, and gradually refine a concept from low-fidelity wireframes to a more interactive high-fidelity prototype. A strong part of this project is the visible progression between the versions. If I continued working on it, I would test the high-fidelity flow with users and further refine the interaction details.";

        $projectId = "mobile-app-meetingrooms";
        include "Projects-2nd-year.php";
        ?>
    </div>
<script src="js/backButton.js"></script>

</body>
</html>