<?php
$path ="";
if($custumPath){
    $path = $custumPath."infoService.txt";
}else{
    $path = "txtfile/infoService.txt";
}


if (file_exists($path)) {
    $file = $path;
}


$handle = fopen($path, "r");
if ($handle) {
//    $newTxt ="";
    $pattern = "/(landing\.-\.)+/i";
    $findemptyLine = "/^[^\s]/";
    $section = 0;
    $sectionVariable = 0;
    $loopIndex =0;
    $elementParsection =0;
    $storageText = "";
    
    $landingText = "";
    $acceuilTexte = "";
    $nbObjet ="";
    $serviceTitre = array();
    $serviceMontant = array();
    $servicePhoto = array();
    $serviceTexte = array();
    $bdpTitre ="";
    $bdpTexte ="";

    while (($line = fgets($handle)) !== false) {

        if($loopIndex == 0){
            switch ($section) {
                case 0:
                    if( preg_match($pattern,$line) == 1){
                        //check pour landing
                        
                        $section ++; 
                        $pattern = "/(introTxt\.-\.)+/i";  
                    }
                break;
                
                case 1:
                    //sauvegarde le titre landing et change pour debut de section
                    if( preg_match($pattern,$line) == 1){
                      
                        $section ++; 
                        $pattern = "/(debut section variable\.-\.)+/i";
                    }else{
                        if( preg_match($findemptyLine,$line) == 0){
                            
                        }else{
                            $landingText .= $line;
                        }
                    }
                    
                break;
                
                case 2:
                    //Sauvegarde text acceuil, 
                    if(preg_match($pattern,$line)){
                        $loopIndex =1; 
                        $pattern =  "/(nbObjet\.-\.)+/i";  
                    }
                    else{
                        if( preg_match($findemptyLine,$line) == 0){
                        
                        }else{
                            $acceuilTexte .= $line;
                        }
                    }
                break;
                
          
                case 3:
                    //cherche titreBDP, et change pour textBDP
                    if(preg_match($pattern,$line)){
                        $section++;
                        $pattern =  "/(textBDP\.-\.)+/i";  
                    }
                    
                break;
                case 4:
                    //Sauvegarde texte service, et change pour débuter la section variable
                    if(preg_match($pattern,$line)){
                        $section++;
                        $pattern =  "/(fin de page\.-\.)+/i";  
                    }
                    else{
                        if( preg_match($findemptyLine,$line) == 0){
                        
                        }else{
                            $bdpTitre .= $line;
                        }
                    }
                break;
                case 5:
                    //Sauvegarde texte bas de page,                     
                    if(preg_match($pattern,$line)){
                        $section++;
                        $pattern =  "/(Hote img\.-\.)+/i";  
                    }
                    else{
                        if( preg_match($findemptyLine,$line) == 0){
                        
                        }else{
                            $bdpTexte .= $line;
                        }
                    }
                break;
              
            }   
        }
        else if($loopIndex == 1){
            switch ($sectionVariable) {
                case 0:
                    if( preg_match($pattern,$line) == 1){
                        // cherche  pour nbObject, change pour titre
                        $sectionVariable ++; 
                        $pattern = "/(titre\.-\.)+/i";  
                    }
                       
                    break;
                case 1:
                    //Sauvegarde nbObjet et change text
                    if( preg_match($pattern,$line) == 1){
                        $sectionVariable ++;  
                        $pattern = "/(text\.-\.)+/i";
                    }else{
                        if( preg_match($findemptyLine,$line) == 0){
                        
                        }else{
                            $nbObjet .=$line;
                        }
                    }
                    
                    
                break;

                case 2:
                    if( preg_match($pattern,$line) == 1){
                        // sauvegarde titre, change pour prix
                        $sectionVariable ++;
                        array_push($serviceTitre,$storageText); 
                        $storageText = "";
                        $pattern = "/(prix\.-\.)+/i";
                         
                    }else{
                        if( preg_match($findemptyLine,$line) == 0){
                        
                        }else{
                            $storageText .=$line;
                        }
                    } 
                break;
                
                case 3:
                    if( preg_match($pattern,$line) == 1){
                        // sauvegarde texte, change pour photo
                        $sectionVariable ++;
                        array_push($serviceTexte,$storageText); 
                        $storageText = "";
                        $pattern = "/(photo\.-\.)+/i";
                         
                    }else{
                        if( preg_match($findemptyLine,$line) == 0){
                        
                        }else{
                            $storageText .=$line;
                        }
                    } 
                break;
                
                case 4:
                    if( preg_match($pattern,$line) == 1){
                        // sauvegarde prix, change pour fin de section
                        $sectionVariable ++;
                        array_push($serviceMontant,$storageText); 
                        $storageText = "";
                        $pattern = "/(fin section\.-\.)+/i";
                         
                    }else{
                        if( preg_match($findemptyLine,$line) == 0){
                        
                        }else{
                            $storageText .=$line;
                        }
                    } 
                break;
                case 5:
                    if( preg_match($pattern,$line) == 1){
                        // sauvegarde photo, change recommencer ou quite la loop
                        $sectionVariable ++;
                        array_push($servicePhoto,$storageText); 
                        $storageText = "";
                        
                        $pattern = "/(fin section variable\.-\.)+/i";
                         
                    }else{
                        if( preg_match($findemptyLine,$line) == 0){
                        
                        }else{
                            $storageText .=$line;
                        }
                    } 
                break;
                case 6:
                    if( preg_match($findemptyLine,$line) == 0){
                                
                    }else{
                        if(preg_match($pattern,$line) ==1){
                            $section++;
                            $loopIndex = 0;
                            $pattern = "/(titreBDP\.-\.)+/i";
                        }else{
                            $sectionVariable= 2;
                            $storageText = "";
   
                            $pattern = "/(text\.-\.)+/i";
                        }
                    }
                    
                break;
                
            }   
        }
    }
  
    fclose($handle);
    
   
   
} else {
    // error opening the file.
}
