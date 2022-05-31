<?php
$file = "../txtfile/infoGalerie.txt";

$text = "landing.-.\n";
$text .= $_POST["landing"];

$text .= "\nintro titre.-.\n";
$text .= $_POST["titreUn"];

$text .= "\nintro text.-.\n";
$text .= $_POST["texteUn"];

$text .= "\nlien un.-.\n";
$text .= $_POST["gsul"];

$text .= "\nlien deux.-.\n";
$text .= $_POST["gsdl"];

$text .= "\nlien trois.-.\n";
$text .= $_POST["gstl"];

$text .= "\n\nSection un.-.\n";
$text .= "titre.-.\n";
$text .= $_POST["gsut"];
for($i=0 ;$i <6;$i++){
    $text .= "\nimg.-.\n";
    $text .= $_POST["imgSectionUn".$i];
    $text .= "\nnext.-.";
}
$text .= "\nfin section.-.\n";

$text .= "\nsection deux.-.\n";
$text .= "titre.-.\n";
$text .= $_POST["gsdt"];
for($i=0 ;$i <6;$i++){
    $text .= "\nimg.-.\n";
    $text .= $_POST["imgSectionUn".$i];
    $text .= "\nnext.-.";
}
$text .= "\nfin section.-.\n";

$text .= "\nsection trois.-.\n";
$text .= "titre.-.\n";
$text .= $_POST["gstt"];
for($i=0 ;$i <6;$i++){
    $text .= "\nimg.-.\n";
    $text .= $_POST["imgSectionTrois".$i];
    $text .= "\nnext.-.";
}
$text .= "\nfin section.-.\n";


file_put_contents($file,$text);
header("Location: http://localhost/clientWebsite/src/adminGalerie.php");
?>