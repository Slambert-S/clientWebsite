
    <?php

    $path = "";
    if ($custumPath) {
        $path = $custumPath . "infoTarif.txt";
    } else {
        $path = "txtfile/infoTarif.txt";
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
        $loopIndex = 0;

        //$keyWord =preg_match_all($pattern, $str); // je ne vois pas ce que cette ligne de code voulais faire 
        $titreLanding = "";
        $titreIntro = "";
        $texteIntro = "";

        $nbElementVariable = "";

        $storageText = "";
        $titreVariable = array();
        $textVariable = array();
        $coutVariable = array();
        $imgVariable = array();

        while (($line = fgets($handle)) !== false) {
            if ($loopIndex == 0) {
                switch ($section) {
                    case 0:
                        if (preg_match($pattern, $line) == 1) {
                            //check pour landing

                            $section++;
                            $pattern = "/(intro titre\.-\.)+/i";
                        }
                        break;
                    case 1:
                        //sauvegarde titre landing , change pour into text.
                        if (preg_match($pattern, $line) == 1) {

                            $section++;
                            $pattern = "/(intro text\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $titreLanding .= $line;
                            }
                        }

                        break;
                    case 2:
                        //Sauvegarde intro texte change pour début section variable . 
                        if (preg_match($pattern, $line)) {
                            $section ++;
                            $pattern =  "/(debut Section Variable\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $titreIntro .= $line;
                            }
                        }
                        break;
                    case 3:
                        //Sauvegarde texte intro at chage pour nb objet. 
                        if (preg_match($pattern, $line)) {
                            $loopIndex = 1;
                            $pattern =  "/(nbObjet\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $texteIntro .= $line;
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
                        //Sauvegarde nombre variable  et change pour carte titre.
                        if (preg_match($pattern, $line) == 1) {
                            $sectionVariable++;
                            $pattern = "/(carte titre\.-\.)+/i";
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
                            $pattern = "/(prix\.-\.)+/i";
                        }
                        break;
                    case 3:
                        //Sauvegarde titre change pour description
                        if (preg_match($pattern, $line) == 1) {
                            array_push($titreVariable, $storageText);
                            $storageText = "";
                            $sectionVariable++;
                            $pattern = "/(description\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                    break;

                    case 4:
                        //Sauvegarde titre change pour fin section
                        if (preg_match($pattern, $line) == 1) {
                            array_push($coutVariable, $storageText);
                            $storageText = "";
                            $sectionVariable++;
                            $pattern = "/(img\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                    

                    break;

                    case 5:
                        //Sauvegarde titre change pour fin section
                        if (preg_match($pattern, $line) == 1) {
                            array_push($textVariable, $storageText);
                            $storageText = "";
                            $sectionVariable++;
                            $pattern = "/(fin section\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                            }
                        }
                    

                    break;

                    case 6:
                        //Sauvegarde texte change pour fin section
                        if (preg_match($pattern, $line) == 1) {
                            array_push($imgVariable, $storageText);

                            $storageText = "";

                            $sectionVariable++;
                            $pattern = "/(fin section variable\.-\.)+/i";
                        } else {
                            if (preg_match($findemptyLine, $line) == 0) {
                            } else {
                                $storageText .= $line;
                               
                            }
                        }
                        

                        break;

                    case 7:
                        //passe les lignes vides
                        if (preg_match($findemptyLine, $line) == 0) {
                        } else {
                            //Si la ligne n'est pas vide test pour  fin de section variable.
                            if (preg_match($pattern, $line) == 1) {
                                $section++;
                                $loopIndex = 0;
                            } else {

                                $sectionVariable = 2;
                                $pattern = "/(carte titre\.-\.)+/i";
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
