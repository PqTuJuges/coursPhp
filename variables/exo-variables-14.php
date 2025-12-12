<?php
    $utilisateur = ['prenom' => 'Mathias', 'nom' => 'Malo' , "email" => 'mathias.malo@ifosup.wavre.be'];

    echo "<pre>"; print_r($utilisateur); echo "</pre>";
    
    echo PHP_EOL;
    $utilisateur["ville"] = "Bruxelles";
    $utilisateur['email'] = 'mathiasmalo@outlook.com';
    echo "<pre>"; print_r($utilisateur); echo "</pre>";
    echo PHP_EOL;
    echo "Utilisateur : " . $utilisateur["prenom"] . " " . $utilisateur["nom"]
?>