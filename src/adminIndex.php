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

  

    

   
    <div class="contenuCentrer  white addMargin" id="textIntroGalery">
        <div class="mxWidth allignSelfFix " >
        
        <form id="" class="" action="php/login.php" method="post">
                <label for="loginUser">Utilisateur</label>
                <input type="text" id="loginUser" name="utilisateur"></textarea>
    
                <label for="loginMdp">Mot de passe </label>
                <input type="password" name="mdp" id="loginMdp"></textarea>
    
                <input type="submit" id="submitButtonIndex" value="Submit" >
    
            </form>
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