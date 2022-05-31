<?php
$file = "../txtfile/infoTarif.txt";

$text = "landing.-.\n";
$text .= $_POST["prixLanding"];

$text .= "\nintro titre.-.\n";
$text .= $_POST["titreIntro"];

$text .= "\nintro text.-.\n";
$text .= $_POST["prixTextIntro"];

$text .= "\ndebut Section Variable.-.\n";
$text .= "nbObjet.-.\n";
$k = 0;
$section = $_POST["nbSection"];
$original = $_POST["original"];
$skip = $_POST["toSkip"];


switch ($_REQUEST['subject']) {

    case "Retirer l'élément sélectionné": //action for html here
        //original -1
        if ($skip == -1) {
            $k = $section;
            $text .= $k;
        } else {
            $k = ($original - 1);
            $text .= $k;
        }


        for ($i = 0; $i < $original; $i++) {
            if ($i != $skip) {
                $text .= "\ndebut section.-.\n";
                $text .= "carte titre.-.\n";
                $text .= $_POST["titreT" . $i];

                $text .= "\nprix.-.\n";
                $text .= $_POST["coutT" . $i];
                
                $text .= "\ndescription.-.\n";
                $text .= $_POST["resumeT" . $i];
                

                $text .= "\nimg.-.\n";
                $text .= $_POST["imgT" . $i];
                $text .= "\nfin section.-.\n";
            }
        }
        $text .= "fin section variable.-.\n";
        break;

    case 'Enregister les informations': //action for css here
        $k = $section;
        $text .= $k;

        for ($i = 0; $i < $section; $i++) {
            if ($i < $original) {
                $text .= "\ndebut section.-.\n";
                $text .= "carte titre.-.\n";
                $text .= $_POST["titreT" . $i];

                $text .= "\nprix.-.\n";
                $text .= $_POST["coutT" . $i];
                
                $text .= "\ndescription.-.\n";
                $text .= $_POST["resumeT" . $i];
                

                $text .= "\nimg.-.\n";
                $text .= $_POST["imgT" . $i];
                $text .= "\nfin section.-.\n";
            } else {

                $text .= "\ndebut section.-.\n";
                $text .= "carte titre.-.\n";
                $text .= "titre" ;

                $text .= "\nprix.-.\n";
                $text .= "cout ";
                
                $text .= "\ndescription.-.\n";
                $text .= "resume";
                

                $text .= "\nimg.-.\n";
                $text .= "imgT";
                $text .= "\nfin section.-.\n";
            }
        }
        $text .= "fin section variable.-.\n";
        break;
        break;
}











file_put_contents($file, $text);
header("Location: http://localhost/clientWebsite/src/adminPrix.php");
?>