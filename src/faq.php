<!DOCTYPE html>

<html lang="fr">

<head>
    <?php include "header.php" ?>
</head>


<body>

    <?php
    include "navPublic.php";
    include "faqParsing.php";
    ?>

   <div class="landing landingFaq">
        <div class="contenuLanding">
            <div class="boxLanding">

                <H1><?php echo $titreLanding ?></H1>
                <a href="contact.html">
                    <div class="buttonClass buttonFix">call to action</div>
                </a>
            </div>

        </div>
    </div>


    <div class="contenuCentrer  white" id="textIntroGalery">
        <div class="mxWidth allignSelfFix ">
            <div class="wrapper">
                <h1><?php echo $titreSectionUn ?></h1>
                <p><?php echo $textSectionUn ?> </p>

            </div>
        </div>
    </div>

    <div id="questionSection">

        <?php
        $nbSection = $nbElementVariable;
        $i = 0;


        for ($i; $i < $nbSection; $i++) {
            echo "<div class='contenuCentrer white'>";
            echo    "<div class='widthFAQ '>";
            echo       "<div class='faqWrapper'>";
            echo            "<h2 class = 'faqTitle'>" . $titreVariable[$i] . "<span class='faqToogleArrow'>&#8744;</span></h2>";
            echo            "<div class = 'faqToggle faqHidden'>";
            echo                "<p>" . $textVariable[$i] . "</p>";
            echo            "</div></div></div></div>";
        }

        ?>

    </div>

    <div class="contenuCentrer noire">
        <?php
        include "footer.php";
        ?>
    </div>




</body>