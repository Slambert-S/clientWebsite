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
        
<?php include "navAdmin.php";?>

    <div class="contenuCentrer  white addMargin" id="textIntroGalery">
        <div class="mxWidth allignSelfFix " >
         <?php 
         include "indexParsing.php";
         ?>
        <div class=" flexColumn white addMargin" id="textIntroGalery">
        <div class="adminMaxWidth allignSelfFix " >
            <div class="wrapper">
            <form id="" class="formStyle" action="php/a.php" method="post">
                    <label for="indexTitreLanding">Text section d'arrivée </label>
                    <input type="text" id="indexTitreLanding" name="titreLanding" value ="<?php echo $landingText?>">
        
                    <label for="acceuilTitre">Titre : paragraphe d'acceuil </label>
                    <input type="text" id="acceuilTitre" name="titreAcceuil" value ="<?php echo $acceuiltitre?>">

                    <label for="textAcceuil">Texte : paragraphe d'acceuil </label>
                    <textarea name="textAcceuil" class="formSpacing" id="textAcceuil" rows="5" cols="30" ><?php echo $acceuilText ?></textarea>

                    <label for="serviceTitre">Titre : Section services </label>
                    <input type="text" id="serviceTitre" name="serviceAcceuil" value ="<?php echo $serviceTitre?>">

                    <label for="textServices">Texte : Section services </label>
                    <textarea name="textServices" class="formSpacing" id="textServices" rows="5" cols="30" ><?php echo $acceuilText ?></textarea>

                    <?php
                     $nbElement = 3;
                     $j = 0;
                     
                     for($j; $j < $nbElement; $j++){
                         echo "<label for='servicetitre".$j."'>Service # ".($j+1)."</label>";
                         echo "<input type='text' id='servicetitre".$j."' name='titreS".$j."' value='".$serviceImgTitre[$j]."'>";
     
                         echo "<label for='imgService".$j."'>Image service # ".($j+1)."</label>";
                         echo "<input type='text' class='formSpacing' id='imgService".$j."' name='imgS".$j."' value='".$serviceImgPhoto[$j]."'>";
                         echo "<br>";
                     }
                    ?>

                    <label for="titreHote">Titre : Section des hotes </label>
                    <input type="text" id="titreHote" name="hoteTitre" value ="<?php echo $hoteTitre?>">

                    <label for="textHote">Texte : Section des hotes </label>
                    <textarea name="textHote" class="formSpacing" id="textHote" rows="5" cols="30" ><?php echo $hoteText ?></textarea>
                    <label for='imgService'>Image Hotes</label>
                    <input type='text' class='formSpacing' id='imgService' name='imgService' value='<?php echo $hotePhoto ?>'>

                    <label for="titreTarif">Titre : Section des tarifs </label>
                    <input type="text" id="titreTarif" name="titreTarif" value ="<?php echo $tarifTitre?>">

                    <label for="textTarif">Texte : Section des tarifs </label>
                    <textarea name="textTarif" class="formSpacing" id="textTarif" rows="5" cols="30" ><?php echo $tarifText ?></textarea>

                    <?php
                     $nbElement = 3;
                     $j = 0;
                     
                     for($j; $j < $nbElement; $j++){
                         echo "<label for='photoTarif".$j."'>Photo pour la carte de tarif # ".($j+1)."</label>";
                         echo "<input type='text' id='photoTarif".$j."' name='photoT".$j."' value='".$tarifCartePhoto[$j]."'>";
     
                         echo "<label for='titreTarif".$j."'>Nom pour la carte de tarif # ".($j+1)."</label>";
                         echo "<input type='text' id='titreTarif".$j."' name='titreT".$j."' value='".$tarifCarteTitre[$j]."'>";
     
                         echo "<label for='prixTarif".$j."'>Prix pour la carte de tarif # ".($j+1)."</label>";
                         echo "<input type='text' class='formSpacing' id='prixT".$j."' name='prixT".$j."' value='".$tarifCarteMontant[$j]."'>";
                         echo "<br>";
                     }
                    ?>

                    <label for="titreGalerie">Titre : Section galerie </label>
                    <input type="text" id="titreGalerie" name="titreGalerie" value ="<?php echo $galeriTitre?>">
                    
                    <?php
                     $nbElement = 3;
                     $j = 0;
                     
                     for($j; $j < $nbElement; $j++){
                         echo "<label for='photogalerie".$j."'>Photo # ".($j+1)." pour la galerie</label>";
                         echo "<input type='text' id='photoTarif".$j."' name='photoG".$j."' value='".$galeriPhoto[$j]."'>";
     
                         echo "<br>";
                     }
                    ?>

                    <input type="submit" id="submitButtonIndex" class="formSmallWidth formSpacing" value="Enregister les informations" name ="subject">

                
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