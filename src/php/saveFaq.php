<?php
$file = "../txtfile/infoFaq.txt";

$text = "titreSection1.-.\n";
$text .= $_POST["titreUn"];
$text .= "\ntexteSection1.-.\n";
$text .= $_POST["texteUn"];

$text .="debut Section Variable.-.\n";
$text .= "nbObject.-.\n";
$k=0;
$section =$_POST["nbSection"];
$original = $_POST["original"];
$skip = $_POST["toSkip"];


switch($_REQUEST['subject']) {

    case 'Retirer': //action for html here
        //original -1
        if($skip == -1){
            $k = $section;
            $text.=$k;    
        }else{
            $k = ($original-1);
            $text.=$k;
        }
        

        for($i =0 ; $i<$original ;$i++){
            if($i != $skip){
                $text .= "\ndebut section.-.\n";
                $text .= "titre.-.\n";
                $text .= $_POST["titreQ".$i];
                $text .= "\nreponse.-.\n";
                $text .= $_POST["reponseQ".$i];
                $text .= "\nfin section.-.\n";

            }

        }
        $text .= "fin section variable.-.\n";
        break;

    case 'Enregister': //action for css here
        $k = $section;
        $text.=$k;
        
        for($i =0 ; $i<$section ;$i++){
            if($i < $original){
                $text .= "\ndebut section.-.\n";
                $text .= "titre.-.\n";
                $text .= $_POST["titreQ".$i];
                $text .= "\nreponse.-.\n";
                $text .= $_POST["reponseQ".$i];
                $text .= "\nfin section.-.\n";

            }else{
                $text .= "\ndebut section.-.\n";
                $text .= "titre.-.\n";
                $text .= "titreQ".$i;
                $text .= "\nreponse.-.\n";
                $text .= "reponseQ".$i;
                $text .= "\nfin section.-.\n";
                
            }

        }
        $text .= "fin section variable.-.\n";
        break;
        break;

}











file_put_contents($file,$text);
header("Location: http://localhost/clientWebsite/src/adminfaq.php");


?>