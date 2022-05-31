<!DOCTYPE html>

<html lang="fr">

<head>
    <?php include "header.php" ?>
</head>


<body>

    <?php
    include "navAdmin.php";
    $custumPath ="txtfile/";
    include "galerieParsing.php";
    ?>

    <div class=" flexColumn white addMargin" id="textIntroGalery">
        <div class="adminMaxWidth allignSelfFix ">
            <div class="wrapper">
            <h1>Gestion des photos de la galeries</h1>
                <form id="" class="formStyle" action="php/saveGalerie.php" method="post">
                <h3>Section d'arrivée</h3>
                    <label for="galerieLanding">Titre section d'arrivée</label>
                    <input type="text" id="galerieLanding" name="landing" value="<?php echo $titreLanding ?>">
                    <h3>Section d'intro</h3>
                    <label for="galerieTitreUn">Titre intro</label>
                    <input type="text" id="galerieTitreUn" name="titreUn" value="<?php echo $titreSectionUn ?>">

                    <label for="sectionUntext">Text : section d'introduction </label>
                    <textarea name="texteUn" class="formSpacing" id="sectionUntext" rows="5" cols="30"><?php echo $textSectionUn ?></textarea>
                    
                    <h3>Section pour la galerie #1</h3>
                    <label for="galerieSectionUntitre">Titre galerie 1</label>
                    <input type="text" id="galerieSectionUntitre" name="gsut" value="<?php echo $titreVariable[0] ?>">
    
                   <?php
                    $nbSection = 6;
                    $j = 0;

                    for ($j; $j < $nbSection; $j++) {
                        echo "<label for='imgSectionUn" . $j . "'>Image # " . ($j + 1) . "</label>";
                        echo "<input type='text' id='imgSectionUn" . $j . "' name='imgSectionUn" . $j . "' value='" . $imgGroupUn[$j] . "'>";
                        echo "<br>";
                    }
                    ?>

                    <label for="galerieSectionUnLien">Lien web, section 1 </label>
                    <input type="text" id="galerieSectionUnLien" name="gsul" value="<?php echo $lienHtml[0] ?>">
    
    
                    <h3>Section pour la galerie #2</h3>
                    <label for="galerieSectionDeuxtitre">Titre galerie 2</label>
                    <input type="text" id="galerieSectionDeuxtitre" name="gsdt" value="<?php echo $titreVariable[1] ?>">    
                   <?php
                    $j = 0;

                    for ($j; $j < $nbSection; $j++) {
                        echo "<label for='imgSectionDeux" . $j . "'>Image # " . ($j + 1) . "</label>";
                        echo "<input type='text' id='imgSectionDeux" . $j . "' name='imgSectionDeux" . $j . "' value='" . $imgGroupDeux[$j] . "'>";
                        echo "<br>";
                    }
                    ?>

                    <label for="galerieSectionDeuxLien">Lien web, section 2 </label>
                    <input type="text" id="galerieSectionUnLien" name="gsdl" value="<?php echo $lienHtml[1] ?>">
    
                    <h3>Section pour la galerie #3</h3>
                    <label for="galerieSectionTroistitre">Titre  galerie 3</label>
                    <input type="text" id="galerieSectionTroistitre" name="gstt" value="<?php echo $titreVariable[2] ?>">
    
                   <?php
                   
                    $j = 0;

                    for ($j; $j < $nbSection; $j++) {
                        echo "<label for='imgSectionTrois" . $j . "'>Image # " . ($j + 1) . "</label>";
                        echo "<input type='text' id='imgSectionTrois" . $j . "' name='imgSectionTrois" . $j . "' value='" . $imgGroupTrois[$j] . "'>";
                        echo "<br>";
                    }
                    ?>

                    <label for="galerieSectionTroisLien">Lien web, section 3 </label>
                    <input type="text" id="galerieSectionTroisLien"  class="formSpacing" name="gstl" value="<?php echo $lienHtml[0] ?>">
                    <br><br>
                   
                    <input type="submit" id="submitButtonIndex" class="formSmallWidth formSpacing" value="Enregister les informations" name="subject">

                    

                </form>
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