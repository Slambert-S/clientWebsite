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

  

    <?php 
        if (file_exists("txtfile/infoFaq.txt")) {
            $file = "txtfile/infoFaq.txt";
        }


        $handle = fopen("txtfile/infoFaq.txt", "r");
        if ($handle) {
        //    $newTxt ="";
            $pattern = "/(titreSection1\.-\.)+/i";
            $findemptyLine = "/^[^\s]/";
            $section = 0;
            $sectionVariable = 0;
            $loopIndex =0;
            
            //$keyWord =preg_match_all($pattern, $str); // je ne vois pas ce que cette ligne de code voulais faire 
            $titreSectionUn = "";
            $textSectionUn = "";
            $nbElementVariable ="";
            $storageText = "";
            $titreVariable = array();
            $textVariable = array();

            while (($line = fgets($handle)) !== false) {
                if($loopIndex == 0){
                    switch ($section) {
                        case 0:
                            if( preg_match($pattern,$line) == 1){
                                //check pour le premier titre
                                
                                $section ++; 
                                $pattern = "/(texteSection1\.-\.)+/i";  
                            }
                            break;
                        case 1:
                            //sauvegarde le premier titre et change pour début section variable
                            if( preg_match($pattern,$line) == 1){
                              
                                $section ++; 
                                $pattern = "/(debut Section Variable\.-\.)+/i";
                            }else{
                                if( preg_match($findemptyLine,$line) == 0){
                                    
                                }else{
                                    $titreSectionUn .= $line;
                                }
                            }
                            
                            break;
                        case 2:
                            //Sauvegarde texte de la section 1, et change pour débuter la section variable
                            if(preg_match($pattern,$line)){
                                $loopIndex = 1;
                                $pattern =  "/(nbObject\.-\.)+/i";  
                            }
                            else{
                                if( preg_match($findemptyLine,$line) == 0){
                                
                                }else{
                                    $textSectionUn .= $line;
                                }
                            }
                            break;
                    }   
                }
                else if($loopIndex == 1){
                    switch ($sectionVariable) {
                        case 0:
                            if( preg_match($pattern,$line) == 1){
                                // , change pour debut section
                                $sectionVariable ++; 
                                $pattern = "/(debut section\.-\.)+/i";  
                            }
                               
                            break;
                        case 1:
                            //Sauvegarde nombre variable efface linge vide pour début de section change pour titre
                            if( preg_match($pattern,$line) == 1){
                                $sectionVariable ++;  
                                $pattern = "/(titre\.-\.)+/i";
                            }else{
                                if( preg_match($findemptyLine,$line) == 0){
                                
                                }else{
                                    $nbElementVariable .=$line;
                                }
                            }
                            
                            
                            break;

                        case 2:
                            if( preg_match($pattern,$line) == 1){
                                // , change pour debut section
                                $sectionVariable ++; 
                                $pattern = "/(reponse\.-\.)+/i";  
                            }  
                        break;
                        case 3:
                            //Sauvegarde titre change pour fin section
                            if( preg_match($pattern,$line) == 1){
                                array_push($titreVariable,$storageText) ;
                                $storageText ="";
                                $sectionVariable ++;  
                                $pattern = "/(fin section\.-\.)+/i";
                            }else{
                                if( preg_match($findemptyLine,$line) == 0){
                                
                                }else{
                                    $storageText.= $line;
                                }
                            }
                            //array_push($titreVariable) $line;
                            
                        break;
                        case 4:
                            //Sauvegarde texte change pour fin section
                            if( preg_match($pattern,$line) == 1){
                                array_push($textVariable,$storageText) ;
                                
                                $storageText="";
                                
                                $sectionVariable ++;  
                                $pattern = "/(fin section variable\.-\.)+/i";
                            }else{
                                if( preg_match($findemptyLine,$line) == 0){
                                
                                }else{
                                    $storageText.= $line;
                                }
                            }
                            //array_push($titreVariable) $line;
                            
                            break;

                        case 5:
                            //passe les lignes vides
                            if( preg_match($findemptyLine,$line) == 0){
                                
                            }else{
                                //Si la ligne n'est pas vide test pour  fin de section variable.
                                if(preg_match($pattern,$line) ==1){
                                    $section++;
                                    $loopIndex = 0;
                                    
                                }else{
                                    
                                    $sectionVariable = 2 ;
                                    $pattern = "/(titre\.-\.)+/i";

                                }
                                
                            }
                            
                            break;
                        
                    }   
                }
            }
          
            fclose($handle);
            echo print_r($titreVariable);
            echo print_r($textVariable);
        } else {
            // error opening the file.
        }
    ?>

   
    <div class=" flexColumn white addMargin" id="textIntroGalery">
        <div class="adminMaxWidth allignSelfFix " >
            <div class="wrapper">
            <form id="" class="formStyle" action="php/saveFaq.php" method="post">
                    <label for="faqTitreUn">Titre section 1</label>
                    <input type="text" id="faqTitreUn" name="titreUn" value ="<?php echo $titreSectionUn?>">
        
                    <label for="sectionUntext">Text : section d'introduction </label>
                    <textarea name="texteUn" class="formSpacing" id="sectionUntext" rows="5" cols="30" ><?php echo $textSectionUn ?></textarea>
            <?php
                $nbSection = $nbElementVariable;
                $j = 0;
                
                for($j; $j < $nbSection; $j++){
                    echo "<label for='question".$j."'>Question ".($j+1)."</label>";
                    echo "<input type='text' id='question".$j."' name='titreQ".$j."' value='".$titreVariable[$j]."'>";

                    echo "<label for='reponseQuestion".$j."'>Réponse question  ".($j+1)."</label>";
                    echo "<input type='text' class='formSpacing' id='reponseQuestion".$j."' name='reponseQ".$j."' value='".$textVariable[$j]."'>";
                    echo "<br>";
                }
            ?>
                    <label for="nombreSectionFaq">Nombre d'élément</label>
                    <input type="number" class="formSpacing formSmallWidth" id="nombreSectionFaq" name="nbSection" min="1" max="9" value="<?php echo intval($nbElementVariable)?>">
                    <p>Note : Les éléments sont retirer a partire du bas. Ci le nombre d'élément voulus diminue les valeurs des sections les plus bases vont être perdu. </p>
                    <input type="submit" id="submitButtonIndex" class="formSmallWidth formSpacing" value="Enregister les informations" name ="subject">

                    <label for="nombreSectionFaq" style="display:none">original</label>
                    <input type="number" style="display:none" class="formSpacing formSmallWidth hidenValue" id="hidenValueFaq" name="original" min="1" max="9" value="<?php echo intval($nbElementVariable)?>">
                

                    <label for="faqSkip">Question à enlever:</label>
                    <select name="toSkip" class ="formSmallWidth formSpacing"id="faqSkip">
                        <option value="-1">Aucun</option>
                        <?php 
                            for($j=1; $j<=$nbSection; $j++){
                                echo "<option value='".$j."'>#".$j."</option>";
                            }
                        ?>
                    </select> 
                    <input type="submit" id="submitButtonIndex" class="formSmallWidth formSpacing" value="Retirer l'élément sélectionné" name ="subject" >
                   

        
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