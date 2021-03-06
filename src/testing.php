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

            
            <form id="adminIndexForm" class="formLeftAligne" action="indexSave.php" method="post">
               <?php
               $nbSection = 3;
                $i = 0;

               for ($i ; $i <$nbSection; $i++){
                   echo "<label for='adminStatment".$i."'> Professional Statement ".$i."</label>;";
                   echo "<textarea id='adminStatment".$i."' name='prof_Statment".$i,"' rows='4' cols='50'></textarea>";   

               }
               
               ?>

            </form>

            </div>

            
        </div>
    </div>

    <div class="contenuCentrer noire">
        <div class="mxWidth test piedDePage">
            <div>
                <h4>Pour nous contacter</h4>
                <p>Email : dumme@email.com</p>
                <p>T??l??phone : 450 204 6580</p>
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
                <h4>Site web d??velopper par</h4>
                <p>Samuel Lambert-Sen??cal </p>
                <p>Potpholio : slambert-senecal.com</p>
            </div>
        </div>
    </div>

</body>