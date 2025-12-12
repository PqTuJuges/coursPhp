<?php
    $motDePasseCorrect = 'Secret123';
    $motDePasseSaisi = readline("Entrez un mot de passe : ");
    if($motDePasseCorrect === $motDePasseSaisi){
        echo "Connexion réussie.";
    }else{
        echo "Mot de passe incorrect";
    }
?>