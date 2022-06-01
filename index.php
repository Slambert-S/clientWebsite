<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Bain de nature, gite et club priver naturise pour homme. 
    </title>

    <link rel="stylesheet" href="ref/reset.css">
    <link rel="stylesheet" href="style/font.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="ref/hamburgers.css">
    <script src="ref/script.js" type="module"></script>

</head>


<body>
    
    <?php
        include "src/navPublicIndex.php";
        $custumPath ="src/txtfile/";
        include "src/indexParsing.php";
    ?>
  
   
    
    <div class="landing landingIndex">
        <div class="contenuLanding" >
            <div class="boxLanding">

                <H1><?php echo $landingText?>  </H1>
                <a href="src/contact.html"><div class="buttonClass">call to action</div></a>
            </div>

        </div>
    </div>

    <div class="contenuCentrer photoAcceuil white" id="accPresentationClub">
   
        <div class="mxWidth photoBg">
            <div  class="texteCentrer hero wrapper">
            
                <h2><?php echo  $acceuiltitre ?></h2>
                <p><?php echo $acceuilText ?> </p>
    
            </div>
        </div>

    </div>
    
    

    
    <div class="contenuCentrer white flexColumn " >
        <div class="mxWidth allignSelfFix">
            
            <div class="wrapper" >
                <h2><?php echo $serviceTitre ?></h2>
                <p>
                    <?php echo $serviceTexte ?>
                </p>
                    
            </div>
                
        </div>
        <div class="texteCentrer">
            <a href="src/service.html"><div class="buttonClass buttonFix">En savoir plus</div></a>
        </div>
        
    </div>

    <div class="contenuCentrer white">
        <div class="mxWidth ">
            <div class="evenColumn" >
                <div class="col container"><img src="images/piscine_triple_un.png" alt="une image de la piscine disponible pour les membre"><div class="centerIMG"><h2><?php echo $serviceImgTitre[0] ?></h2> <a href="src/service.html"><div class="buttonClass buttonFix">En savoir plus</div></a></div></div>
                <div class="col container"><img src="images/nakedKerry.jpg" alt="" class="hoverIMG"><div class="centerIMG"><h2><?php echo $serviceImgTitre[1] ?></h2> <a href="src/service.html"><div class="buttonClass buttonFix">En savoir plus</div></a></div></div>
                <div class="col container"><img src="images/cuisine_section_un.png" alt="" class="hoverIMG"><div class="centerIMG"><h2><?php echo $serviceImgTitre[2] ?></h2> <a href="src/service.html"><div class="buttonClass buttonFix">En savoir plus</div></a></div></div>
            </div>
        </div>
    </div>

    <div class="contenuCentrer">
        <div class="mxWidth ">
            <div  class ="sectionDouble wrapper">
                <img src="images/haute.jpg" alt="image des hotes" id="imgDeuxColone">
                <div class="contenuTexte" >
                    <h2><?php echo $hoteTitre ?></h2>
                    <p><?php echo $hoteText ?></p>
                </div>
            </div>
        </div> 
    </div>

    
    <div class="contenuCentrer white flexColumn " >
        <div class="mxWidth allignSelfFix">
            
            <div class="wrapper" >
                <h2><?php echo $tarifTitre ?></h2>
                <p><?php echo $tarifText ?> </p>
            </div>
                
        </div>
        <div class="texteCentrer">
          <a href="src/prix.html"><div class="buttonClass buttonFix">En savoir plus</div></a>  
        </div>
        
    </div>

    
    <div class="contenuCentrer white flexColumn " >
        <div class="mxWidth allignSelfFix" id="carteTroisLarge">
            <div class="carte">
                <img src="images/bureau_carte.png" alt="">
                <h3><?php echo $tarifCarteTitre[0] ?></h3>
                <p><?php echo $tarifCarteMontant[0] ?>$</p>
                <a href="src/prix.html"><p  class="lienCarte">En savoir plus</p></a>
            </div>

            <div class="carte">
                <img src="images/chambre_carte.png" alt="">
                <h3><?php echo $tarifCarteTitre[1] ?></h3>
                <p><?php echo $tarifCarteMontant[1] ?>$</p>
                <a href="src/prix.html"><p  class="lienCarte">En savoir plus</p></a>
            </div>

            <div class="carte">
                <img src="images/foret_carte.png" alt="">
                <h3><?php echo $tarifCarteTitre[2] ?></h3>
                <p><?php echo $tarifCarteMontant[2] ?>$</p>
                <a href="src/prix.html"><p  class="lienCarte">En savoir plus</p></a>
            </div>
                
        </div>
        
        
    </div>

    <div class="contenuCentrer ">
        <div class="mxWidth test-o wrapper " id="galerie">
            <h1 class="textCentrer"><?php echo $galeriTitre ?></h1>
            <div class="evenColumn wrapper" >
                <div class="col"><img src="images/cabane_bois.jpg" alt=""></div>
                <div class="col"><img src="images/acceuil.jpg" alt=""></div>
                <div class="col"><img src="images/quaie.png" alt=""></div>
            </div>
            <div class="textCentrer">
                <div class="buttonClass buttonFix">En voir plus</div>
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
                    <li><a href="index.php" >Acceuil</a></li>
                    <li><a href ="src/service.php">Service</a></li>
                    <li><a href ="src/galerie.php">Galerie</a></li>
                    <li><a href ="src/faq.php">FAQ</a></li>
                    <li><a href="src/prix.php">Tarifs</a></li>
                    <li><a href="src/contact.php">Contacter</a></li>
                   
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