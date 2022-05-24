<?php
$pasword = "/motDepasse/";
$username = "/utilisateur/";

$login = $_POST["utilisateur"];
$mdp = $_POST["mdp"];

if(preg_match($username,$login)){
    echo "good Username";

    if(preg_match($pasword,$mdp)){
        echo "both good";
        header('Location: ../admin.php');
    }
    else{
        echo "username good, pasword bad";
    }
}else{
    echo "username bad";
}


?>