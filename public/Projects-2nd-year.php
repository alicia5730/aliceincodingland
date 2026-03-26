<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
    <body>
    <!-- Template for new 2nd-year projects -->
    <div class="containerProject containerProject--detailed">
        <h3><?= $projectTitle ?></h3>
        <div class="infoProject">
            <img src="img/<?= $projectImage ?>" alt="<?= $projectImageAlt ?>">

            <article>
                <!-- TABLE OF CONTENTS SIDEBAR -->
                <nav class="toc-sidebar">
                    <p class="toc-title">On this page</p>
                    <ul>
                        <li><a href="#<?= $projectId ?>-overview">Project overview</a></li>
                        <li><a href="#<?= $projectId ?>-role-team-tools">Role, team & tools</a></li>
                        <li><a href="#<?= $projectId ?>-problem">Problem & goal</a></li>
                        <li><a href="#<?= $projectId ?>-target-audience">Target audience</a></li>
                        <li><a href="#<?= $projectId ?>-requirements">Requirements</a></li>
                        <li><a href="#<?= $projectId ?>-user-flow">User flow</a></li>
                        <li><a href="#<?= $projectId ?>-wireframes">Wireframes</a></li>
                        <li><a href="#<?= $projectId ?>-hifi">Hi-Fi design</a></li>
                        <li><a href="#<?= $projectId ?>-testing">Testing</a></li>
                        <li><a href="#<?= $projectId ?>-iterations">Iterations</a></li>
                        <?php if (!empty($linkPrototype) || !empty($linkDemo) || !empty($linkRepo)): ?>
                            <li><a href="#<?= $projectId ?>-final-result">Final result</a></li>
                        <?php endif; ?>
                        <li><a href="#<?= $projectId ?>-reflection">Reflection</a></li>
                    </ul>
                </nav>

                <!-- MAIN CONTENT COLUMN -->
                <div class="article-content">
                    <h4 id="<?= $projectId ?>-overview">Project Title</h4>
                    <p><strong>Title:</strong> <?= $projectTitle ?></p>
                    <p><?= $projectOneLiner ?></p>

                    <h4 id="<?= $projectId ?>-role-team-tools">My Role, Team, Tools</h4>
                    <ul>
                        <li><strong>My role:</strong> <?= $projectRole ?></li>
                        <li><strong>Team:</strong> <?= $projectTeam ?></li>
                        <li><strong>Tools:</strong> <?= $projectTools ?></li>
                    </ul>

                    <h4 id="<?= $projectId ?>-problem">Problem (Context + Goal)</h4>
                    <p><strong>Context:</strong> <?= $projectContext ?></p>
                    <p><strong>Problem:</strong> <?= $projectProblem ?></p>
                    <p><strong>Goal:</strong> <?= $projectGoal ?></p>

                    <h4 id="<?= $projectId ?>-target-audience">Target Audience</h4>
                    <p><strong>Primary persona:</strong></p>
                    <ul>
                        <li>Profile: <?= $personaProfile ?></li>
                        <li>Goals: <?= $personaGoals ?></li>
                        <li>Pain points: <?= $personaPains ?></li>
                        <li>Needs: <?= $personaNeeds ?></li>
                    </ul>

                    <h4 id="<?= $projectId ?>-requirements">Requirements (MoSCoW)</h4>
                    <p><strong>Must have:</strong></p>
                    <ul>
                        <?= $reqMust ?>
                    </ul>
                    <p><strong>Should have:</strong></p>
                    <ul>
                        <?= $reqShould ?>
                    </ul>
                    <p><strong>Could have:</strong></p>
                    <ul>
                        <?= $reqCould ?>
                    </ul>

                    <h4 id="<?= $projectId ?>-user-flow">User Flow</h4>
                    <p><?= $userFlowIntro ?></p>
                    <ol>
                        <?= $userFlowSteps ?>
                    </ol>

                    <h4 id="<?= $projectId ?>-wireframes">Wireframes</h4>
                    <div class="wireframe-gallery">
                        <?= $wireframes ?>
                    </div>

                    <h4 id="<?= $projectId ?>-hifi">Hi-Fi Design</h4>
                    <ul>
                        <?= $hiFiPoints ?>
                    </ul>

                    <h4 id="<?= $projectId ?>-testing">Testing</h4>
                    <p><strong>Setup:</strong> <?= $testingSetup ?></p>
                    <p><strong>Findings:</strong></p>
                    <ul>
                        <?= $testingFindings ?>
                    </ul>

                    <h4 id="<?= $projectId ?>-iterations">Iterations</h4>
                    <ul>
                        <?= $iterations ?>
                    </ul>

                    <?php if (!empty($linkPrototype) || !empty($linkDemo) || !empty($linkRepo)): ?>
                        <h4 id="<?= $projectId ?>-final-result">Final Result</h4>
                        <?php if (!empty($linkPrototype)): ?>
                            <p><a href="<?= $linkPrototype ?>" target="_blank" class="link-visibility">Prototype</a></p>
                        <?php endif; ?>

                        <?php if (!empty($linkDemo)): ?>
                            <p><a href="<?= $linkDemo ?>" target="_blank" class="link-visibility">Demo</a></p>
                        <?php endif; ?>

                        <?php if (!empty($linkRepo)): ?>
                            <p><a href="<?= $linkRepo ?>" target="_blank" class="link-visibility">Repository</a></p>
                        <?php endif; ?>
                    <?php endif; ?>

                    <h4 id="<?= $projectId ?>-reflection">Reflection</h4>
                    <p><?= $reflection ?></p>
                </div>
            </article>
        </div>
    </div>

    </body>
</html>