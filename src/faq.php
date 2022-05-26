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
            <div class="boxLanding">ZZZ

                <H1>Services offerts</H1>
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


        <div class="contenuCentrer white">
            <div class="widthFAQ ">
                <div class="faqWrapper">
                    <h2 class="faqTitle"> Question de Référence <span class="faqToogleArrow">&#8744;</span></h2>
                    <div class="faqToggle faqHidden">
                        <p>La nudité est permies sur tout le site saufe sur le stationnement</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="contenuCentrer noire">
        <div class="mxWidth test piedDePage">
            <div>
                <h4>Pour nous contacter</h4>
                <p>Email : dumme@email.com</p>
                <p>Téléphone : 450 204 6580</p>
                <a href="#">Facebook</a>
            </div>
            <div>
                <h4>Navigation</h4>
                <ul>
                    <li><a href="../index.html">Acceuil</a></li>
                    <li><a href="../src/service.html">Service</a></li>
                    <li><a href="../src/galerie.html">Galerie</a></li>
                    <li><a href="../src/faq.html">FAQ</a></li>
                    <li><a href="../src/prix.html">Tarifs</a></li>
                    <li><a href="../src/contact.html">Contacter</a></li>

                </ul>
            </div>
            <div>
                <h4>Site web développer par</h4>
                <p>Samuel Lambert-Senécal </p>
                <p>Potpholio : slambert-senecal.com</p>
            </div>
        </div>
    </div>




</body>