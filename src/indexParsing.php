<?php
$path = "";
if ($custumPath) {
    $path = $custumPath . "infoIndex.txt";
} else {
    $path = "txtfile/infoIndex.txt";
}


if (file_exists($path)) {
    $file = $path;
}


$handle = fopen($path, "r");
if ($handle) {
    //    $newTxt ="";
    $pattern = "/(landingTxt\.-\.)+/i";
    $findemptyLine = "/^[^\s]/";
    $section = 0;
    $sectionVariable = 0;
    $loopIndex = 0;
    $elementParsection = 0;
    $storageText = "";


    //$keyWord =preg_match_all($pattern, $str); // je ne vois pas ce que cette ligne de code voulais faire 

    $landingText = "";
    $acceuiltitre = "";
    $acceuilText = "";
    $serviceTitre = "";
    $serviceTexte = "";
    $serviceImgTitre = array();
    $serviceImgPhoto = array();
    $hotePhoto = "";
    $hoteText = "";
    $hoteTitre = "";
    $tarifTitre = "";
    $tarifText = "";
    $tarifCarteTitre = array();
    $tarifCarteMontant = array();
    $tarifCartePhoto = array();
    $galeriTitre = "";
    $galeriPhoto = array();

    while (($line = fgets($handle)) !== false) {

        if ($loopIndex == 0) {
            switch ($section) {
                case 0:
                    if (preg_match($pattern, $line) == 1) {
                        //check pour le premier titre

                        $section++;
                        $pattern = "/(acceuilTitre\.-\.)+/i";
                    }
                    break;

                case 1:
                    //sauvegarde le titre landing et change pour  titre acceuil
                    if (preg_match($pattern, $line) == 1) {

                        $section++;
                        $pattern = "/(acceuilText\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $landingText .= $line;
                        }
                    }

                    break;

                case 2:
                    //Sauvegarde titre acceuil, et change pour service titre
                    if (preg_match($pattern, $line)) {
                        $section++;
                        $pattern =  "/(service Titre\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $acceuiltitre .= $line;
                        }
                    }
                    break;

                case 3:
                    //Sauvegarde texte acceuil, et change pour service text
                    if (preg_match($pattern, $line)) {
                        $section++;
                        $pattern =  "/(service text\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $acceuilText .= $line;
                        }
                    }
                    break;

                case 4:
                    //Sauvegarde titre service, et change pour X
                    if (preg_match($pattern, $line)) {
                        $section++;
                        $pattern =  "/(section photo services\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $serviceTitre .= $line;
                        }
                    }
                    break;
                case 5:
                    //Sauvegarde texte service, et change pour débuter la section variable
                    if (preg_match($pattern, $line)) {
                        $loopIndex = 1;
                        $pattern =  "/(service un titre\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $serviceTexte .= $line;
                        }
                    }
                    break;
                case 6:
                    //cherche Hote titre, et change pour Hote text
                    if (preg_match($pattern, $line)) {
                        $section++;
                        $pattern =  "/(Hote text\.-\.)+/i";
                    }

                    break;
                case 7:
                    //Sauvegarde texte service, et change pour débuter la section variable
                    if (preg_match($pattern, $line)) {
                        $section++;
                        $pattern =  "/(Hote img\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $hoteTitre .= $line;
                        }
                    }
                    break;
                case 8:
                    //Sauvegarde Hote text, et change pour tarif
                    if (preg_match($pattern, $line)) {
                        $section++;
                        $pattern =  "/(tarif\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $hoteText .= $line;
                        }
                    }
                    break;
                case 9:
                    //Sauvegarde Hote text, et change pour tarif
                    if (preg_match($pattern, $line)) {
                        $section++;
                        $pattern =  "/(tarif text\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $hotePhoto .= $line;
                        }
                    }
                    break;
                case 10:
                    //Sauvegarde Hote text, et change pour tarif
                    if (preg_match($pattern, $line)) {
                        $section++;
                        $pattern =  "/(carte tarif\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $tarifTitre .= $line;
                        }
                    }
                    break;
                case 11:
                    //Sauvegarde text tafie, et change pour carte titre et chande pour la section des carte de tarif
                    if (preg_match($pattern, $line)) {
                        $loopIndex = 2;
                        $sectionVariable = 0;
                        $pattern =  "/(carte titre\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $tarifText .= $line;
                        }
                    }
                    break;
                case 12:
                    //cherche Hote titre, et change pour Hote text
                    if (preg_match($pattern, $line)) {
                        $section++;
                        $pattern =  "/(triple photo\.-\.)+/i";
                    }

                    break;
                case 13:
                    //Sauvegarde texte service, et change pour débuter la section variable
                    if (preg_match($pattern, $line)) {
                        $loopIndex = 3;
                        $sectionVariable = 0;
                        $pattern =  "/(photo\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $galeriTitre .= $line;
                        }
                    }
                    break;
            }
        } else if ($loopIndex == 1) {
            switch ($sectionVariable) {
                case 0:
                    if (preg_match($pattern, $line) == 1) {
                        // cherche service un titre, change pour photo
                        $sectionVariable++;
                        $pattern = "/(photo\.-\.)+/i";
                    }

                    break;
                case 1:
                    //Sauvegarde service titre et change pour fin element
                    if (preg_match($pattern, $line) == 1) {
                        $sectionVariable++;
                        array_push($serviceImgTitre, $storageText);
                        $storageText = "";
                        $pattern = "/(fin element\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $storageText .= $line;
                        }
                    }


                    break;

                case 2:
                    if (preg_match($pattern, $line) == 1) {
                        // sauvegarde lien photo, change pour fin Element
                        $sectionVariable++;
                        array_push($serviceImgPhoto, $storageText);
                        $storageText = "";
                        $elementParsection++;
                        if ($elementParsection == 3) {
                            $pattern = "/(Hote titre\.-\.)+/i";
                            $loopIndex = 0;
                            $section++;
                            $elementParsection = 0;
                        } else {
                            $sectionVariable = 0;
                            $pattern = "/(service un titre\.-\.)+/i";
                        }
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $storageText .= $line;
                        }
                    }
                    break;
            }
        } else if ($loopIndex == 2) { //section pour les cartes de tarifs
            switch ($sectionVariable) {
                case 0:
                    if (preg_match($pattern, $line) == 1) {
                        // cherche pour carte tarif, change pour prix
                        $sectionVariable++;
                        $pattern = "/(carte prix\.-\.)+/i";
                    }

                    break;
                case 1:
                    //Sauvegarde service prix et change pour fin element
                    if (preg_match($pattern, $line) == 1) {
                        $sectionVariable++;
                        array_push($tarifCarteTitre, $storageText);
                        $storageText = "";
                        $pattern = "/(carte photo\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $storageText .= $line;
                        }
                    }


                    break;
                case 2:
                    //Sauvegarde  lien photo et change pour fin element
                    if (preg_match($pattern, $line) == 1) {
                        $sectionVariable++;
                        array_push($tarifCarteMontant, $storageText);
                        $storageText = "";
                        $pattern = "/(fin element\.-\.)+/i";
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $storageText .= $line;
                        }
                    }


                    break;

                case 3:
                    if (preg_match($pattern, $line) == 1) {
                        // sauvegarde lien photo, et test pour la loop
                        $sectionVariable++;
                        array_push($tarifCartePhoto, $storageText);
                        $storageText = "";
                        $elementParsection++;
                        if ($elementParsection == 3) {
                            $pattern = "/(galerie titre\.-\.)+/i";
                            $loopIndex = 0;
                            $section++;
                            $elementParsection = 0;
                        } else {
                            $sectionVariable = 0;
                            $pattern = "/(carte titre\.-\.)+/i";
                        }
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $storageText .= $line;
                        }
                    }
                    break;
            }
        } else if ($loopIndex == 3) {
            switch ($sectionVariable) {
                case 0:
                    if (preg_match($pattern, $line) == 1) {
                        // cherche pour carte tarif, change pour prix
                        $sectionVariable++;
                        $pattern = "/(fin element\.-\.)+/i";
                    }

                    break;

                case 1:
                    if (preg_match($pattern, $line) == 1) {
                        // sauvegarde lien photo, et test pour la loop
                        $sectionVariable++;
                        array_push($galeriPhoto, $storageText);
                        $storageText = "";
                        $elementParsection++;
                        if ($elementParsection == 3) {
                            $pattern = "/finGalery\.-\.)+/i";
                            $loopIndex = 0;
                            $section++;
                            $elementParsection = 0;
                        } else {
                            $sectionVariable = 0;
                            $pattern = "/(photo\.-\.)+/i";
                        }
                    } else {
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            $storageText .= $line;
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
