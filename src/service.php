<!DOCTYPE html>

<html lang="fr">

<head>

    <?php
    include "header.php";
    ?>

</head>


<body>

    <?php
    include "navPublic.php";
    $custumPath = "txtfile/";
    include "serviceParsing.php"
    ?>
    <div class="landing landingServices">
        <div class="contenuLanding">
            <div class="boxLanding">

                <H1><?php echo $landingText ?></H1>
                <a href="contact.html">
                    <div class="buttonClass buttonFix">call to action</div>
                </a>
            </div>

        </div>
    </div>


    <div class="contenuCentrer  white" id="textIntroServices">
        <div class="mxWidth allignSelfFix textCentrer">
            <div class="fixItemCenter wrapper">

                <p><?php echo $acceuilTexte ?> </p>

            </div>

        </div>
    </div>


    <div class="contenuCentrer">
        <div class="mxWidth ">
            <?php
            for ($i = 0; $i < $nbObjet; $i++) {
                if ($i % 2 == 0) {
                    echo "<div  class ='sectionDouble wrapper' >";
                    echo "<img src='../images/" . $servicePhoto[$i] . "' alt='image du sevice offert' class='imgDeuxColone'>";
                    echo "<div  class='contenuTexte'>";
                    echo "<h2>" . $serviceTitre[$i] . "</h2>";
                    echo "<p>" . $serviceTexte[$i] . "</p>";
                    echo "<p>Prix du service : <strong>" . $serviceMontant[$i] . "</strong>  </p>";
                    echo "</div></div>";
                } else {
                    echo "<div  class ='sectionDouble doubleReverse wrapper' >";
                    echo "<div  class='contenuTexte'>";
                    echo   "<h2>" . $serviceTitre[$i] . "</h2>";
                    echo  "<p>" . $serviceTexte[$i] . "</p>";
                    echo   "<p>Prix du service : <strong>" . $serviceMontant[$i] . "</strong>  </p>";
                    echo "</div>";
                    echo "<img src='../images/" . $servicePhoto[$i] . "' alt='image du sevice offert' class='imgDeuxColone'>";
                    echo "</div>";
                }
            }
            ?>


        </div>
    </div>

    <div class="contenuCentrer  white">

        <div class="mxWidth allignSelfFix ">
            <div id="wrapper">
                <h1><?php echo $bdpTitre ?></h1>
                <p><?php echo $bdpTexte ?> </p>
                <div class="textCentrer">
                    <a href="prix.html">
                        <div class="buttonClass buttonFix">Voir nos prix </div>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <div class="contenuCentrer noire">
        <?php
        include "footer.php";
        ?>
    </div>




</body>