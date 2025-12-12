<?php
    $role = readline("Entrez un role : ");
    switch($role){
        case "admin":
            echo "Accès total au système.";
            break;
        case "editor":
            echo "Accès limité : modification du contenu autorisée.";
            break;
        case "user":
            echo "Accès restreint : consultation uniquement.";
            break;
        default:
        echo "Erreur : rôle inconnu";
    }
?>