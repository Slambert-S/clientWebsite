<!DOCTYPE html>

<html lang="fr">

<head>
    <?php include "header.php" ?>
</head>


<body>
    <?php
    include "navPublic.php";
    $custumPath = "txtfile/";
    include "prixParsing.php";
    ?>



    <div class="landing landingPrix">
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
            <div id="wrapper">
                <h1><?php echo $titreIntro ?></h1>
                <p> <?php echo $texteIntro ?> </p>

            </div>
        </div>
    </div>

    <div class="contenuCentrer white">
        <div class="mxWidth ">
            <div class="carteHolder wrapper">

                <?php
                $nbSection = $nbElementVariable;
                $j = 0;

                for ($j; $j < $nbSection; $j++) {
                    echo "<div class='cartePrix'>";
                    echo "<div class='carteText'>";
                    echo "<h3>".$titreVariable[$j]."</h3>";
                    echo "<h4>Cout : <b>".$coutVariable[$j]."$</b></h4>";
                    echo "<p>".$textVariable[$j]."</p>";
                    echo "</div>";
                    echo "<img src='../images/".$imgVariable[$j]."' alt=''>";
                    echo "</div>";
                }

                ?>

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