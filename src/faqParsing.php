
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
        $loopIndex = 0;

        //$keyWord =preg_match_all($pattern, $str); // je ne vois pas ce que cette ligne de code voulais faire 
        $titreSectionUn = "";
        $textSectionUn = "";
        $nbElementVariable = "";
        $storageText = "";
        $titreVariable = array();
        $textVariable = array();

        while (($line = fgets($handle)) !== false) {
            if ($loopIndex == 0) {
                switch ($section) {
                    case 0:
                        if (preg_match($pattern, $line) == 1) {
                            //check pour le premier titre

                            $section++;
                            $pattern = "/(texteSection1\.-\.)+/i";
                        }
                        break;
                    case 1:
                        //sauvegarde le premier titre et change pour début section variable
                        if (preg_match($pattern, $line) == 1) {

                            $section++;
                            $pattern = "/(debut Section Variable\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $titreSectionUn .= $line;
                            }
                        }

                        break;
                    case 2:
                        //Sauvegarde texte de la section 1, et change pour débuter la section variable
                        if (preg_match($pattern, $line)) {
                            $loopIndex = 1;
                            $pattern =  "/(nbObject\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $textSectionUn .= $line;
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
                            $pattern = "/(debut section\.-\.)+/i";
                        }

                        break;
                    case 1:
                        //Sauvegarde nombre variable efface linge vide pour début de section change pour titre
                        if (preg_match($pattern, $line) == 1) {
                            $sectionVariable++;
                            $pattern = "/(titre\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $nbElementVariable .= $line;
                            }
                        }
                        break;

                    case 2:
                        if (preg_match($pattern, $line) == 1) {
                            // , change pour debut section
                            $sectionVariable++;
                            $pattern = "/(reponse\.-\.)+/i";
                        }
                        break;
                    case 3:
                        //Sauvegarde titre change pour fin section
                        if (preg_match($pattern, $line) == 1) {
                            array_push($titreVariable, $storageText);
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
                    case 4:
                        //Sauvegarde texte change pour fin section
                        if (preg_match($pattern, $line) == 1) {
                            array_push($textVariable, $storageText);

                            $storageText = "";

                            $sectionVariable++;
                            $pattern = "/(fin section variable\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                        //array_push($titreVariable) $line;

                        break;

                    case 5:
                        //passe les lignes vides
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            //Si la ligne n'est pas vide test pour  fin de section variable.
                            if (preg_match($pattern, $line) == 1) {
                                $section++;
                                $loopIndex = 0;
                            } else {

                                $sectionVariable = 2;
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
