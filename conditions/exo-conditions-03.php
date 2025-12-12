<?php
    $codeHttp = readline("Entrez un code status http : ");
    if($codeHttp == 200){
        echo "OK : la requête a réussi";
    }
    elseif($codeHttp == 301 || $codeHttp == 302){
        echo "Redirection : la ressource a changé d'adresse";
    }elseif($codeHttp==404){
        echo "Erreur : ressource introuvable";
    }elseif($codeHttp==500){
        echo "Erreur : problème interne du serveur";
    }else{
        echo "ce status n'est pas géré par votre script";
    }
?>