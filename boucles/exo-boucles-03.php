<?php
    $reponse = null;
    do{
        $reponse = readline("Confirmez-vous la suppression du compte ? (o/n) : ");
    }while($reponse != 'o' && $reponse != "n");

    if($reponse == "o"){
        echo "Suppression du compte en cours...";
    }else{
        echo "Suppression annulée. Aucun changement effectué";
    }
?>