<!DOCTYPE html>

<html lang="fr">

<head>
    <?php include "header.php" ?>
</head>


<body>

  <?php
   include "navPublic.php";
   $custumPath = "txtfile/";
   include "contactParsing.php"
  ?>



    <div class="landing landingContact">
        <div class="contenuLanding">
            <div class="boxLanding">

                <H1><?php echo $landingText ?></H1>

            </div>

        </div>
    </div>


    <div class="contenuCentrer  white addMargin" id="textIntroGalery">
        <div class="mxWidth allignSelfFix ">
            <div class="wrapper">

                <p><?php echo $acceuilText ?>
                </p>
            
            </div>
        </div>
    </div>

    <div class="contenuCentrer green">
        <div class="mxWidth fixContactSpace">
            <div class="sectionDouble wrapper">
                <div class="contacteText">
                    <h3>Pour vous rendre</h3>
                    <p><?php echo $numero; ?>, <?php echo $rue ?></p>
                    <P><?php echo $rue; ?></P>
                    <h3>Pour nous joindre</h3>
                    <h4>Email :</h4>
                    <a <?php echo "href='mailto:".$email."'"; ?> >
                        <p class="email" style="text-decoration: underline;"><?php echo $email; ?></p>
                    </a>
                    <h4>Téléphone : </h4>
                    <p><?php echo $telephone; ?></p>
                    <p><a <?php echo "href='".$facebook."'"?>>Facebook</a></p>

                </div>

                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1529.278139315228!2d-72.77249628030772!3d45.33451021053687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9c51376f0e3b1%3A0x3b9ec3bbaa1b7ba2!2s127%20Rue%20Lussier%2C%20Saint-Alphonse-de-Granby%2C%20QC%20J0E%202A0!5e0!3m2!1sfr!2sca!4v1640118372196!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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