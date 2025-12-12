<?php
    $valeur = "10";
    echo gettype($valeur);
    var_dump($valeur);
    $addition = $valeur + 5;
    //On voit que l'addition se fait en montrant les 2 types de variable utilisé
    echo gettype($addition);
    //Var_dump lui montre que le dernier type utilisé
    var_dump($addition);
    echo $valeur;
?>