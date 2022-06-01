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
                    echo "<h3>" . $titreVariable[$j] . "</h3>";
                    echo "<h4>Cout : <b>" . $coutVariable[$j] . "$</b></h4>";
                    echo "<p>" . $textVariable[$j] . "</p>";
                    echo "</div>";
                    echo "<img src='../images/" . $imgVariable[$j] . "' alt=''>";
                    echo "</div>";
                }

                ?>

            </div>


        </div>
    </div>

    <div class="contenuCentrer noire">
        <?php
        include "footer.php";
        ?>
    </div>

</body>