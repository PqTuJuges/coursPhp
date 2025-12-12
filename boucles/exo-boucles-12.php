<?php
    $journal = [
    'INFO Démarrage du service',
    'INFO Connexion utilisateur',
    'ERROR Échec de connexion à la base de données',
    'INFO Tentative de reconnexion',
    'INFO Service arrêté'
];
    foreach($journal as $message){
        $info = substr($message, 0, 4);
        $error = substr($message, 0, 5);
        var_dump($error);
        if($info == "INFO"){
            continue;
        }
        if($error == "ERROR"){
            echo "Erreur détectée dans le journal : $message";
            break;
        }
    }
?>