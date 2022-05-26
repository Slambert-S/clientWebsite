<?php
$file = "../txtfile/infoService.txt";

$text = "landing.-.\n";
$text .= $_POST["titreLanding"];
$text .= "\nintroTxt.-.\n";
$text .= $_POST["textAcceuil"];

$text .= "\ndebut section variable.-.\n";
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
                $text .= "\ntitre.-.\n";
                $text .= $_POST["titreS" . $i];
                $text .= "\ntext.-.\n";
                $text .= $_POST["texteS" . $i];
                $text .= "\nprix.-.\n";
                $text .= $_POST["prixS" . $i];
                $text .= "\nphoto.-.\n";
                $text .= $_POST["imgS" . $i];
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
                $text .= "\ntitre.-.\n";
                $text .= $_POST["titreS" . $i];
                $text .= "\ntext.-.\n";
                $text .= $_POST["texteS" . $i];
                $text .= "\nprix.-.\n";
                $text .= $_POST["prixS" . $i];
                $text .= "\nphoto.-.\n";
                $text .= $_POST["imgS" . $i];
                $text .= "\nfin section.-.\n";
            } else {

                $text .= "\ntitre.-.\n";
                $text .= "titreS" . $i;
                $text .= "\ntext.-.\n";
                $text .= "texteS" . $i;
                $text .= "\nprix.-.\n";
                $text .= "prixS" . $i;
                $text .= "\nphoto.-.\n";
                $text .= "imgS" . $i;
                $text .= "\nfin section.-.\n";
            }
        }
        $text .= "fin section variable.-.\n";
        break;
}

$text .= "titreBDP.-.\n";
$text .= $_POST["titreBDP"];
$text .= "\ntextBDP.-.\n";
$text .= $_POST["textBDP"];









file_put_contents($file, $text);
header("Location: http://localhost/clientWebsite/src/adminService.php");

?>