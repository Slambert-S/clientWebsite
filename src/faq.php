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

<body>
    
   <?php include "navPublic.php";?>
    

    

    <div class="landing landingFaq">
        <div class="contenuLanding" >
            <div class="boxLanding">

                <H1>Services offerts</H1>
                <a href="contact.html"><div class="buttonClass buttonFix">call to action</div></a>
            </div>

        </div>
    </div>

   
    <div class="contenuCentrer  white" id="textIntroGalery">
        <div class="mxWidth allignSelfFix " >
            <div  class="wrapper">
                <h1><?php echo $titreSectionUn ?></h1> 
                <p><?php echo $textSectionUn ?> </p>
                    
            </div>
        </div> 
    </div>

    <div id="questionSection">

    <?php
        $nbSection = $nbElementVariable;
        $i = 0;
                    
                    
        for ($i ; $i <$nbSection; $i++){
            echo "<div class='contenuCentrer white'>";
            echo    "<div class='widthFAQ '>";
            echo       "<div class='faqWrapper'>";
            echo            "<h2 class = 'faqTitle'>".$titreVariable[$i]."<span class='faqToogleArrow'>&#8744;</span></h2>";
            echo            "<div class = 'faqToggle faqHidden'>";
            echo                "<p>".$textVariable[$i]."</p>";
            echo            "</div></div></div></div>";
                
        }
                
    ?>
        
        
        <div class="contenuCentrer white">
            <div class="widthFAQ ">
                <div class="faqWrapper">
                    <h2 class = "faqTitle"> Question de Référence <span class="faqToogleArrow">&#8744;</span></h2>
                    <div class = "faqToggle faqHidden">
                        <p>La nudité est permies sur tout le site saufe sur le stationnement</p>
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
