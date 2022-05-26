<!DOCTYPE html>

<html lang="fr">

<head>
    <?php include "header.php" ?>
</head>


<body>

    <?php
    include "navAdmin.php";
    include "faqParsing.php";
    ?>

    <div class=" flexColumn white addMargin" id="textIntroGalery">
        <div class="adminMaxWidth allignSelfFix ">
            <div class="wrapper">
                <form id="" class="formStyle" action="php/saveFaq.php" method="post">
                    <label for="faqTitreUn">Titre section 1</label>
                    <input type="text" id="faqTitreUn" name="titreUn" value="<?php echo $titreSectionUn ?>">

                    <label for="sectionUntext">Text : section d'introduction </label>
                    <textarea name="texteUn" class="formSpacing" id="sectionUntext" rows="5" cols="30"><?php echo $textSectionUn ?></textarea>
                    <?php
                    $nbSection = $nbElementVariable;
                    $j = 0;

                    for ($j; $j < $nbSection; $j++) {
                        echo "<label for='question" . $j . "'>Question " . ($j + 1) . "</label>";
                        echo "<input type='text' id='question" . $j . "' name='titreQ" . $j . "' value='" . $titreVariable[$j] . "'>";
                        echo "<label for='reponseQuestion" . $j . "'>Réponse question  " . ($j + 1) . "</label>";
                        echo "<input type='text' class='formSpacing' id='reponseQuestion" . $j . "' name='reponseQ" . $j . "' value='" . $textVariable[$j] . "'>";
                        echo "<br>";
                    }
                    ?>
                    <label for="nombreSectionFaq">Nombre d'élément</label>
                    <input type="number" class="formSpacing formSmallWidth" id="nombreSectionFaq" name="nbSection" min="1" max="9" value="<?php echo intval($nbElementVariable) ?>">
                    <p>Note : Les éléments sont retirer a partire du bas. Ci le nombre d'élément voulus diminue les valeurs des sections les plus bases vont être perdu. </p>
                    <input type="submit" id="submitButtonIndex" class="formSmallWidth formSpacing" value="Enregister les informations" name="subject">

                    <label for="nombreSectionFaq" style="display:none">original</label>
                    <input type="number" style="display:none" class="formSpacing formSmallWidth hidenValue" id="hidenValueFaq" name="original" min="1" max="9" value="<?php echo intval($nbElementVariable) ?>">


                    <label for="faqSkip">Question à enlever:</label>
                    <select name="toSkip" class="formSmallWidth formSpacing" id="faqSkip">
                        <option value="-1">Aucun</option>
                        <?php
                        for ($j = 1; $j <= $nbSection; $j++) {
                            echo "<option value='" . $j . "'>#" . $j . "</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" id="submitButtonIndex" class="formSmallWidth formSpacing" value="Retirer l'élément sélectionné" name="subject">



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