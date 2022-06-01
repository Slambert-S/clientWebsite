<!DOCTYPE html>

<html lang='fr'>

<head>
    <?php include 'header.php' ?>
</head>


<body>

    <?php
    include 'navAdmin.php';
    $custumPath = 'txtfile/';
    include 'prixParsing.php';
    ?>

    <div class=' flexColumn white addMargin' id='textIntroGalery'>
        <div class='adminMaxWidth allignSelfFix '>
            <div class='wrapper'>
                <h1>Gertion de la page ' Tarif ' </h1>
                <form id='' class='formStyle' action='php/savePrix.php' method='post'>
                    <h3>Section d"arrivée</h3>
                    <label for='prixLanding'>Titre: Acceuil</label>
                    <input type='text' id='prixLanding' name='prixLanding' value='<?php echo $titreLanding ?>'>
                    <h3>Section d"acceuil</h3>
                    <label for='prixTitreUn'>Titre: intro</label>
                    <input type='text' id='prixTitreUn' name='titreIntro' value='<?php echo $titreIntro ?>'>

                    <label for='prixTextIntro'>Text : section d"introduction </label>
                    <textarea name='prixTextIntro' class='formSpacing' id='prixTextIntro' rows='5' cols='30'><?php echo $texteIntro ?></textarea>
                    <h3>Section des services (variables)</h3>
                    <?php
                    $nbSection = $nbElementVariable;
                    $j = 0;

                    for ($j; $j < $nbSection; $j++) {
                        echo "<label for='titreT" . $j . "'>Titre service # " . ($j + 1) . "</label>";
                        echo '<input type="text" id="titreT' . $j . '" name="titreT' . $j . '" value="' . $titreVariable[$j] . '">';

                        echo "<label for='coutT" . $j . "'>Cout service # " . ($j + 1) . "</label>";
                        echo '<input type="text" class="formSpacing" id="coutT' . $j . '" name="coutT' . $j . '" value="' . $coutVariable[$j] . '">';

                        echo "<label for='resumeT" . $j . "'>Description service # " . ($j + 1) . "</label>";
                        echo '<input type="text" class="formSpacing" id="resumeT' . $j . '" name="resumeT' . $j . '" value="';
                        echo $textVariable[$j];
                        echo '">';

                        echo "<label for='imgT" . $j . "'>Lien image du serice # " . ($j + 1) . "</label>";
                        echo '<input type="text" class="formSpacing" id="imgT' . $j . '" name="imgT' . $j . '" value="' . $imgVariable[$j] . '">';

                        echo "<br>";
                    }
                    ?>

                    <label for='nombreSectionFaq'>Nombre d"élément</label>
                    <input type='number' class='formSpacing formSmallWidth' id='nombreSectionFaq' name='nbSection' min='1' max='20' value='<?php echo intval($nbElementVariable) ?>'>
                    <p>Note : Les éléments sont retirer a partire du bas. Ci le nombre d"élément voulus diminue les valeurs des sections les plus bases vont être perdu. </p>
                    <input type='submit' id='submitButtonIndex' class='formSmallWidth formSpacing' value='Enregister les informations' name='subject'>

                    <label for='nombreSectionFaq' style='display:none'>original</label>
                    <input type='number' style='display:none' class='formSpacing formSmallWidth hidenValue' id='hidenValueFaq' name='original' min='1' max='9' value='<?php echo intval($nbElementVariable) ?>'>


                    <label for='faqSkip'>Tarif à enlever:</label>
                    <select name='toSkip' class='formSmallWidth formSpacing' id='faqSkip'>
                        <option value='-1'>Aucun</option>
                        <?php
                        for ($j = 1; $j <= $nbSection; $j++) {
                            echo '<option value="' . $j . '">#' . $j . '</option>';
                        }
                        ?>
                    </select>
                    <input type='submit' id='submitButtonIndex' class='formSmallWidth formSpacing' value='Retirer l"élément sélectionné' name='subject'>



                </form>
            </div>
        </div>
    </div>




    <div class='contenuCentrer noire'>
        <?php
        include 'footer.php';
        ?>
    </div>

</body>