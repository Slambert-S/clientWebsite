<?php
$file = "../txtfile/infoContact.txt";

$text = "landing.-.\n";
$text .= $_POST["titreLanding"];

$text .= "\nintro text.-.\n";
$text .= $_POST["textAcceuil"];

$text .= "\nadress numero.-.\n";
$text .= $_POST["numeroAdress"];

$text .= "\nadress rue.-.\n";
$text .= $_POST["rueAdress"];

$text .= "\nadress ville.-.\n";
$text .= $_POST["villeAdress"];

$text .= "\nemail.-.\n";
$text .= $_POST["email"];
$text .= "\ntelephone.-.\n";
$text .= $_POST["telephone"];
$text .= "\nfacebook.-.\n";
$text .= $_POST["facebook"];



file_put_contents($file,$text);
header("Location: http://localhost/clientWebsite/src/adminContact.php");
?>