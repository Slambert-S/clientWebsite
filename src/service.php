<!DOCTYPE html>

<html lang="fr">

<head>

    <?php
    include "header.php";
    ?>

</head>


<body>

    <button id="menuHam" class="hamburger hamburger--emphatic " tabindex="0" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    <div id="wrappTopNav">
        <div id="wrappPadTopNav">
            <a href="../index.html" id="logoMenu">Bain de nature</a>
            <nav class="topNav">
                <a href="service.html">Service</a>
                <a href="faq.html">FAQ</a>
                <a href="galerie.html">Galerie</a>
                <a href="prix.html">Tarifs</a>
                <a href="contact.html">Nous contacter</a>
            </nav>
        </div>
    </div>



    <div id="wrappTopNavMobile" class="menuClose">

        <nav class="topNav">
            <a href="../index.html" id="logoMenuMobile">Bain de nature</a>
            <a href="../index.html">Acceuil</a>
            <a href="service.html">Service</a>
            <a href="faq.html">FAQ</a>
            <a href="galerie.html">Galerie</a>
            <a href="prix.html">Tarifs</a>
            <a href="contact.html">Nous contacter</a>
        </nav>
    </div>


    <?php
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