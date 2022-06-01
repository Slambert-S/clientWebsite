<?php
$path = "";
if ($custumPath) {
    $path = $custumPath ."infoContact.txt";
} else {
    $path = "txtfile/infoContact.txt";
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
    $elementParsection = 0;
    $storageText = "";

    $landingText = "";
    $acceuilText = "";
    $numero = "";
    $rue = "";
    $adress = "";
    $email = "";
    $telephone = "";
    $facebook = "";

    while (($line = fgets($handle)) !== false) {

        
        switch ($section) {
            case 0:
                if (preg_match($pattern, $line) == 1) {
                    //check pour landing

                        $section++;
                        $pattern = "/(intro text\.-\.)+/i";
                    }
            break;

            case 1:
                    //sauvegarde le titre landing et change pour le adress numero
            if (preg_match($pattern, $line) == 1) {

                    $section++;
                    $pattern = "/(adress numero\.-\.)+/i";
                } else {
                    if (preg_match($findemptyLine, $line) == 0) {
                    } else {
                         $landingText .= $line;
                     }
                 }
            break;

            case 2:
                    //Sauvegarde text intro, et change pour adress rue
                if (preg_match($pattern, $line)) {
                     $section++;
                     $pattern =  "/(adress rue\.-\.)+/i";
                } else {
                    if (preg_match($findemptyLine, $line) == 0) {
                     } else {
                        $acceuilText .= $line;
                    }
                }
            break;

            case 3:
                //Sauvegarde numero civique, et change la ville 
                if (preg_match($pattern, $line)) {
                     $section++;
                    $pattern =  "/(adress ville\.-\.)+/i";
                } else {
                    if (preg_match($findemptyLine, $line) == 0) {
                    } else {
                         $numero .= $line;
                    }
                }
            break;

            case 4:
                //Sauvegarde rue, et change pour l'email
                if (preg_match($pattern, $line)) {
                     $section++;
                    $pattern =  "/(email\.-\.)+/i";
                } else {
                    if (preg_match($findemptyLine, $line) == 0) {
                    } else {
                         $rue .= $line;
                    }
                }
            break;

            case 5:
                //Sauvegarde adress, et change pour telephone
                if (preg_match($pattern, $line)) {
                     $section++;
                    $pattern =  "/(telephone\.-\.)+/i";
                } else {
                    if (preg_match($findemptyLine, $line) == 0) {
                    } else {
                         $adress .= $line;
                    }
                }
            break;
            case 6:
                //Sauvegarde email, et change pour facebook
                if (preg_match($pattern, $line)) {
                     $section++;
                    $pattern =  "/(facebook\.-\.)+/i";
                } else {
                    if (preg_match($findemptyLine, $line) == 0) {
                    } else {
                         $email .= $line;
                    }
                }
            break;

            case 7:
                //Sauvegarde telephone, et change pdefault
                if (preg_match($pattern, $line)) {
                     $section++;
                    $pattern =  "/(default\.-\.)+/i";
                } else {
                    if (preg_match($findemptyLine, $line) == 0) {
                    } else {
                         $telephone .= $line;
                    }
                }
            break;

            case 8:
                //Sauvegarde facebook
                if (preg_match($findemptyLine, $line) == 0) {
                    
                } else {
                         $facebook .= $line;
                }
                
            break;

            }

              
        
       
    }
    fclose($handle);
    
} else {
    // error opening the file.
}

?>