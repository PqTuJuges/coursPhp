<?php
    $tentativesRestantes = 3;
    $motDePasseCorrect = "secret123";
    $motDePasseSaisi = null;
    while ($motDePasseSaisi != $motDePasseCorrect && $tentativesRestantes != 0){
        echo "Connexion refusée. Tentatives restantes : $tentativesRestantes" . PHP_EOL;
        $motDePasseSaisi = readline("Entrez un mot de passe : ");
        $tentativesRestantes--;
    }
    if($motDePasseSaisi == $motDePasseCorrect){
        echo "Connexion réussie. Bienvenue";
    }else{
        echo "Compte bloqué après trop de tentatives";
    }
?>