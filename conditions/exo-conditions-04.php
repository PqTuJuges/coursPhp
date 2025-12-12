<?php
    $idEnBase = 5;
    $idRequete = (int) readline("Entrez un identifiant entier : ");
    var_dump($idRequete,$idEnBase);
    if($idRequete == $idEnBase){
        echo "Comparaison non stricte réussie, les deux valeurs sont considérées comme égales.";
    }else{
        echo "Comparaison non stricte échouée, les deux valeurs ne sont pas considérées comme égales.";
    }

    echo PHP_EOL;
    if($idRequete === $idEnBase){
        echo "Comparaison stricte réussie, la valeur et le type sont identiques.";
    }else{
        echo "Comparaison stricte échouée, la valeur ou le type ne correspond pas.";
    }

?>