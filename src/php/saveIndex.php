<?php
$file = "../txtfile/infoIndex.txt";

$text = "landingTxt.-.\n";
$text .= $_POST["titreLanding"];

$text .= "\nacceuilTitre.-.\n";
$text .= $_POST["titreAcceuil"];

$text .= "\nacceuilText.-.\n";
$text .= $_POST["textAcceuil"];

$text .= "\nservice Titre.-.\n";
$text .= $_POST["serviceTitre"];

$text .= "\nservice text.-.\n";
$text .= $_POST["textServices"];

$text .= "\nsection photo services.-.\n";
for($i =0 ; $i<3 ;$i++){
    $text .= "service un titre.-.\n";
    $placeHolder = "titreS".$i;
    $text .= $_POST[$placeHolder];
    $placeHolder = "imgS".$i;
    $text .= "\nphoto.-.\n";
    $text .= $_POST[$placeHolder];

    $text .= "\nfin element.-.\n";
}

$text .= "Hote titre.-.\n";
$text .= $_POST["hoteTitre"];
$text .= "\nHote text.-.\n";
$text .= $_POST["textHote"];
$text .= "\nHote img.-.\n";
$text .= $_POST["imgHote"];

$text .= "\ntarif.-.\n";
$text .= $_POST["titreTarif"];
$text .= "\ntarif text.-.\n";
$text .= $_POST["textTarif"];

$text .= "carte tarif.-.\n";
for($i =0 ; $i<3 ;$i++){
    $text .= "carte titre.-.\n";
    $placeHolder = "titreT".$i;
    $text .= $_POST[$placeHolder];
    
    $placeHolder = "prixT".$i;
    $text .= "\ncarte prix.-.\n";
    $text .= $_POST[$placeHolder];

    $placeHolder = "photoT".$i;
    $text .= "\ncarte photo.-.\n";
    $text .= $_POST[$placeHolder];

    $text .= "\nfin element.-.\n";
}

$text .= "galerie titre.-.\n";
$text .= $_POST["titreGalerie"];
$text .= "\ntriple photo.-.\n";

for($i=0 ; $i<3 ;$i++){
    $text .= "photo.-.\n";
    $placeHolder = "photoG".$i;
    $text .= $_POST[$placeHolder];
    
    $text .= "\nfin element.-.\n";
}



file_put_contents($file,$text);
header("Location: http://localhost/clientWebsite/src/adminIndex.php");
?>