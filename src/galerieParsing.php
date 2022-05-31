
    <?php

    $path = "";
    if ($custumPath) {
        $path = $custumPath . "infoGalerie.txt";
    } else {
        $path = "txtfile/infoGalerie.txt";
    }


    if (file_exists($path)) {
        $file = $path;
    }


    $handle = fopen($path, "r");
    if ($handle) {
        
        $pattern = "/(landing\.-\.)+/i";
        $findemptyLine = "/^[^\s]/";
        $section = 0;
        $sectionVariable = 0;
        $loopIndex = 0;

        $titreSectionUn = "";
        $textSectionUn = "";
        $titreLanding = "";
        
        $storageText = "";
        $titreVariable = array();
        $lienHtml = array();
        $imgGroupUn = array();
        $imgGroupDeux = array();
        $imgGroupTrois = array();
        
        while (($line = fgets($handle)) !== false) {
            if ($loopIndex == 0) {
                switch ($section) {
                    case 0:
                        if( preg_match($pattern,$line) == 1){
                            //check pour landing
                            
                            $section ++; 
                            $pattern = "/(intro titre\.-\.)+/i";  
                        }
                    break;
                    
                    case 1:
                        //sauvegarde le titre landing et change pour intro text
                        if( preg_match($pattern,$line) == 1){
                          
                            $section ++; 
                            $pattern = "/(intro text\.-\.)+/i";
                        }else{
                            if( preg_match($findemptyLine,$line) == 0){
                                
                            }else{
                                $titreLanding .= $line;
                            }
                        }
                        
                    break;
                    
                    case 2:
                        //Sauvegarde titre section un, change lien un 
                        if(preg_match($pattern,$line)){
                            $section ++;
                            $pattern =  "/(lien un\.-\.)+/i";  
                        }
                        else{
                            if( preg_match($findemptyLine,$line) == 0){
                            
                            }else{
                                $titreSectionUn .= $line;
                            }
                        }
                    break;
                    case 3:
                        //Sauvegarde text section un, change pour lien deux 
                        if(preg_match($pattern,$line)){
                            $section ++; 
                            $pattern =  "/(lien deux\.-\.)+/i";  
                        }
                        else{
                            if( preg_match($findemptyLine,$line) == 0){
                            
                            }else{
                                $textSectionUn .= $line;
                            }
                        }
                    break;
                    case 4:
                        //Sauvegarde lien un , change pour lien trois 
                        if(preg_match($pattern,$line)){
                            array_push($lienHtml, $storageText);
                            $storageText = "";
                            $section ++; 
                            $pattern =  "/(lien trois\.-\.)+/i";  
                        }
                        else{
                            if( preg_match($findemptyLine,$line) == 0){
                            
                            }else{
                                $storageText .= $line;
                            }
                        }
                    break;
                    case 5:
                        //Sauvegarde lien deux, change pour section un 
                        if(preg_match($pattern,$line)){
                            array_push($lienHtml, $storageText);
                            $storageText = "";
                            $section ++; 
                            $pattern =  "/(Section un\.-\.)+/i";  
                        }
                        else{
                            if( preg_match($findemptyLine,$line) == 0){
                            
                            }else{
                                $storageText .= $line;
                            }
                        }
                    break;
                    case 6:
                        //Sauvegarde lien trois, change pour titre 
                        if(preg_match($pattern,$line)){
                            array_push($lienHtml, $storageText);
                            $loopIndex = 1;
                            $storageText = "";
                            $pattern =  "/(titre\.-\.)+/i";  
                        }
                        else{
                            if( preg_match($findemptyLine,$line) == 0){
                            
                            }else{
                                $storageText .= $line;
                            }
                        }
                    break;
                    
              
                    
                }
            } else if ($loopIndex == 1) {
                switch ($sectionVariable) {
                    case 0:
                        if (preg_match($pattern, $line) == 1) {
                            // , change pour debut section
                            $sectionVariable++;
                            $pattern = "/(img\.-\.)+/i";
                        }

                        break;
                    case 1:
                        //Sauvegarde titre change pour next
                        if (preg_match($pattern, $line) == 1) {
                            array_push($titreVariable, $storageText);
                            $storageText = "";
                            $sectionVariable++;
                            $pattern = "/(next\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                        break;

                 
                    case 2:
                        //Sauvegarde titre change pour fin section
                        if (preg_match($pattern, $line) == 1) {
                            array_push($imgGroupUn, $storageText);
                            $storageText = "";
                            $sectionVariable++;
                            $pattern = "/(fin section\.-\.)+/i";
                          
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                        //array_push($titreVariable) $line;

                        break;
                    
                    case 3:
                        //passe les lignes vides
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            //Si la ligne n'est pas vide test pour  fin de section variable.
                            if (preg_match($pattern, $line) == 1) {
                                $sectionVariable = 0;
                                $loopIndex = 2;
                                $pattern = "/(titre\.-\.)+/i";
                            } else {
                                
                                $sectionVariable = 2;
                                $pattern = "/(next\.-\.)+/i";
                            }
                        }

                        break;
                }
            } else if ($loopIndex == 2) {
                switch ($sectionVariable) {
                    case 0:
                        if (preg_match($pattern, $line) == 1) {
                            // , change pour debut section
                            $sectionVariable++;
                            $pattern = "/(img\.-\.)+/i";
                        }

                        break;
                    case 1:
                        //Sauvegarde titre change pour next
                        if (preg_match($pattern, $line) == 1) {
                            array_push($titreVariable, $storageText);
                            $storageText = "";
                            $sectionVariable++;
                            $pattern = "/(next\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                        break;

                 
                    case 2:
                        //Sauvegarde titre change pour fin section
                        if (preg_match($pattern, $line) == 1) {
                            array_push($imgGroupDeux, $storageText);
                            $storageText = "";
                            $sectionVariable++;
                            $pattern = "/(fin section\.-\.)+/i";
                          
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                        //array_push($titreVariable) $line;

                        break;
                    
                    case 3:
                        //passe les lignes vides
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            //Si la ligne n'est pas vide test pour  fin de section variable.
                            if (preg_match($pattern, $line) == 1) {
                                $loopIndex = 3;
                                $sectionVariable = 0;
                                $pattern = "/(titre\.-\.)+/i";
                            } else {
                                
                                $sectionVariable = 2;
                                $pattern = "/(next\.-\.)+/i";
                            }
                        }

                        break;
                }
            }else if ($loopIndex == 3) {
                switch ($sectionVariable) {
                    case 0:
                        if (preg_match($pattern, $line) == 1) {
                            // , change pour debut section
                            $sectionVariable++;
                            $pattern = "/(img\.-\.)+/i";
                        }

                        break;
                    case 1:
                        //Sauvegarde titre change pour next
                        if (preg_match($pattern, $line) == 1) {
                            array_push($titreVariable, $storageText);
                            $storageText = "";
                            $sectionVariable++;
                            $pattern = "/(next\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                        break;

                 
                    case 2:
                        //Sauvegarde titre change pour fin section
                        if (preg_match($pattern, $line) == 1) {
                            array_push($imgGroupTrois, $storageText);
                            $storageText = "";
                            $sectionVariable++;
                            $pattern = "/(fin section\.-\.)+/i";
                          
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                        //array_push($titreVariable) $line;

                        break;
                    
                    case 3:
                        //passe les lignes vides
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            //Si la ligne n'est pas vide test pour  fin de section variable.
                            if (preg_match($pattern, $line) == 1) {
                                $loopIndex =2;
                                $sectionVariable = 0;
                            } else {
                                
                                $sectionVariable = 2;
                                $pattern = "/(next\.-\.)+/i";
                            }
                        }

                        break;
                }
            }
        }

        fclose($handle);
        echo $titreLanding;
        echo print_r($imgGroupDeux);
        echo print_r($titreVariable);
    } else {
        // error opening the file.
    }
    ?>
