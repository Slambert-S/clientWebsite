<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Bain de nature
    </title>

    <link rel="stylesheet" href="../ref/reset.css">
    <link rel="stylesheet" href="../style/font.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../ref/hamburgers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../ref/script.js" type="module"></script>

</head>


<body>
        
    <button id ="menuHam" class="hamburger hamburger--emphatic " tabindex="0" type="button">
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
            <a href="../index.html" >Acceuil</a>
            <a href="service.html">Service</a>
            <a href="faq.html">FAQ</a>
            <a href="galerie.html">Galerie</a>
            <a href="prix.html">Tarifs</a>
            <a href="contact.html">Nous contacter</a>
            
        </nav>
        
    </div>

  

    <div class="landing landingContact">
        <div class="contenuLanding" >
            <div class="boxLanding">

                <H1>Services offerts</H1>
                
            </div>

        </div>
    </div>

   
    <div class="contenuCentrer  white addMargin" id="textIntroGalery">
        <div class="mxWidth allignSelfFix " >
            <div  class="wrapper">
                
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor aliquet eros, at commodo quam tincidunt at. Cras eu felis ac arcu imperdiet cursus vel eu nibh. Nulla semper tortor ac arcu pellentesque viverra. 
                    Nunc ut dapibus felis. Maecenas sed neque vitae nisi vulputate suscipit ac vel mauris. Aliquam gravida id dolor id gravida. Maecenas vel tellus quis nunc euismod eleifend. Quisque euismod consequat tellus, id placerat urna mattis a. Aenean placerat tortor at diam dapibus, in suscipit nisl sagittis.
                    Donec pretium luctus ultrices. Aliquam tincidunt in sapien commodo convallis. 
                </p>
                <?php echo "<h1>This is a php test</h1>"?>
                    
            </div>
        </div> 
    </div>

    <div  class ="contenuCentrer green">
        <div class="mxWidth fixContactSpace" >
            <div  class= "sectionDouble wrapper" >
                <div class="contacteText">
                    <h3>Pour vous rendre</h3>
                    <p>127, rue Lussier</p>
                    <P>Saint-Alphonse-de-Granby</P>
                    <h3>Pour nous joindre</h3>
                    <h4>Email :</h4>
                    <a href="mailto:kerrysummers49@gmail.com"><p class="email">kerrysummers49@gmail.com</p></a>
                    <h4>Téléphone : </h4>
                    <p>450 204 6580</p>
                    <p><a href="https://www.facebook.com/KerryBdn">Facebook</a></p>

                </div>

                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1529.278139315228!2d-72.77249628030772!3d45.33451021053687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc9c51376f0e3b1%3A0x3b9ec3bbaa1b7ba2!2s127%20Rue%20Lussier%2C%20Saint-Alphonse-de-Granby%2C%20QC%20J0E%202A0!5e0!3m2!1sfr!2sca!4v1640118372196!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                    <li><a href="../index.html" >Acceuil</a></li>
                    <li><a href ="../src/service.html">Service</a></li>
                    <li><a href ="../src/galerie.html">Galerie</a></li>
                    <li><a href ="../src/faq.html">FAQ</a></li>
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