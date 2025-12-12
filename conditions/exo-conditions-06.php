<?php
    $estConnecte = true;
    $estAdmin = false;
    $compteSuspendu = false;

    if($estConnecte && $estAdmin && !$compteSuspendu){
        echo "Accès à l'administration autorisé.";
    }
    else{
        echo "Accès refusé";
    }
    echo PHP_EOL;
    
    if($estConnecte && !$estAdmin && !$compteSuspendu){
        echo "Accès en lecture seule";
    }
?>