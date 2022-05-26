<!DOCTYPE html>

<html lang="fr">

<head>
    <?php include "header.php" ?>
</head>

<body>

    <?php include "navAdmin.php"; ?>

    <div class="contenuCentrer  white addMargin" id="textIntroGalery">
        <div class="mxWidth allignSelfFix ">
            <?php
            $custumPath = "txtfile/";
            include "serviceParsing.php";
            ?>
            <div class=" flexColumn white addMargin" id="textIntroGalery">
                <div class="adminMaxWidth allignSelfFix ">
                    <div class="wrapper">
                        <h1>Gestion pour la page des services</h1>
                        <form id="" class="formStyle" action="php/saveService.php" method="post">
                            <h3>Section d'arrivée</h3>
                            <label for="indexTitreLanding">Text section d'arrivée </label>
                            <input type="text" id="indexTitreLanding" name="titreLanding" value="<?php echo $landingText ?>">

                            <h3>Section d'acceuil</h3>
                            <label for="textAcceuil">Texte : paragraphe d'acceuil </label>
                            <textarea name="textAcceuil" class="formSpacing" id="textAcceuil" rows="5" cols="30"><?php echo $acceuilTexte ?></textarea>


                            <h3>Gestion des services (variable)</h3>
                            <?php
                            $nbElement = $nbObjet;
                            $j = 0;

                            for ($j; $j < $nbElement; $j++) {
                                echo "<label for='servicetitre" . $j . "'>Service # " . ($j + 1) . "</label>";
                                echo "<input type='text' id='servicetitre" . $j . "' name='titreS" . $j . "' value='" . $serviceTitre[$j] . "'>";

                                echo "<label for='serviceTexte" . $j . "'>Text pour le service # " . ($j + 1) . "</label>";
                                echo " <textarea name='texteS" . $j . "' class='formSpacing' id='serviceTexte" . $j . "' rows='5' cols='30' >" . $serviceTexte[$j] . "</textarea>";

                                echo "<label for='prixService" . $j . "'>Prix pour le service # " . ($j + 1) . "</label>";
                                echo "<input type='text' class='formSpacing' id='prixService" . $j . "' name='prixS" . $j . "' value='" . $serviceMontant[$j] . "'>";

                                echo "<label for='imgService" . $j . "'>Image pour le service # " . ($j + 1) . "</label>";
                                echo "<input type='text' class='formSpacing' id='imgService" . $j . "' name='imgS" . $j . "' value='" . $servicePhoto[$j] . "'>";
                                echo "<br>";
                            }
                            ?>

                            <label for="nombreSectionService">Nombre d'élément désirer</label>
                            <input type="number" class="formSpacing formSmallWidth" id="nombreSectionService" name="nbSection" min="1" max="9" value="<?php echo intval($nbObjet) ?>">
                            <p>Note : Les éléments sont retirer a partire du bas. Ci le nombre d'élément voulus diminue les valeurs des sections les plus bases vont être perdu. </p>

                            <label for="nombreSectionFaq" style="display:none">original</label>
                            <input type="number" style="display:none" class="formSpacing formSmallWidth hidenValue" id="hidenValueFaq" name="original" min="1" max="9" value="<?php echo intval($nbObjet) ?>">

                            <label for="serviceSkip">Service à enlever:</label>
                            <select name="toSkip" class="formSmallWidth formSpacing" id="serviceSkip">
                                <option value="-1">Aucun</option>
                                <?php
                                for ($j = 1; $j <= $nbObjet; $j++) {
                                    echo "<option value='" . $j . "'>#" . $j . "</option>";
                                }
                                ?>
                            </select>
                            <input type="submit" id="submitButtonIndex" class="formSmallWidth formSpacing" value="Retirer l'élément sélectionné" name="subject">

                            <h3>Bas de page</h3>
                            <label for="titreBDP">Titre bas de page </label>
                            <input type="text" id="titreBDP" name="titreBDP" value="<?php echo $bdpTitre ?>">

                            <label for="textBDP">Text bas de page </label>
                            <textarea name="textBDP" class="formSpacing" id="textBDP" rows="5" cols="30"><?php echo $bdpTexte ?></textarea>

                            <input type="submit" id="submitButtonFin" class="formSmallWidth formSpacing" value="Enregister les informations" name="subject">


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