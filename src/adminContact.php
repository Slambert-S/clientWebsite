<!DOCTYPE html>

<html lang="fr">

<head>
    <?php include "header.php" ?>
</head>

<body>

    <?php
    $custumPath = "txtfile/";
    include "navAdmin.php";
    ?>

    <div class="contenuCentrer  white addMargin" id="textIntroGalery">
        <div class="mxWidth allignSelfFix ">
            <?php
            include "contactParsing.php";
            ?>
            <div class=" flexColumn white addMargin" id="textIntroGalery">
                <div class="adminMaxWidth allignSelfFix ">
                    <div class="wrapper">
                        <h1>Gestion pour la page de contact</h1>
                        <form id="" class="formStyle" action="php/saveContact.php" method="post">
                            <h3>Section d'arrivée</h3>
                            <label for="indexTitreLanding">Titre section d'arrivée </label>
                            <input type="text" id="indexTitreLanding" name="titreLanding" value="<?php echo $landingText ?>">
                            
                            <h3>Section d'acceuil</h3>
                            
                            <label for="textAcceuil">Texte : paragraphe d'acceuil </label>
                            <textarea name="textAcceuil" class="formSpacing" id="textAcceuil" rows="5" cols="30"><?php echo $acceuilText ?></textarea>
                            
                            <h3>Section de l'adress</h3>

                            <label for="numeroAdress">Numéreau civique </label>
                            <input type="text" id="numeroAdress" name="numeroAdress" value="<?php echo $numero ?>">
                            
                            <label for="rueAdress">Nom de la rue </label>
                            <input type="text" id="rueAdress" name="rueAdress" value="<?php echo $rue ?>">
                            
                            <label for="villeAdress">Nom de la ville </label>
                            <input type="text" id="villeAdress" name="villeAdress" value="<?php echo $adress ?>">
                            
                            <h3>Section de l'adress</h3>

                            <label for="email">Adress email </label>
                            <input type="text" id="email" name="email" value="<?php echo $email ?>">

                            
                            <label for="telephone">Numéreau de téléphone </label>
                            <input type="text" id="telephone" name="telephone" value="<?php echo $telephone ?>">

                            <label for="facebook">Lien facebook</label>
                            <input type="text" id="facebook" name="facebook" value="<?php echo $facebook ?>">

                            <input type="submit" id="submitButtonIndex" class="formSmallWidth formSpacing" value="Enregister les informations" name="subject">
                        </form>
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