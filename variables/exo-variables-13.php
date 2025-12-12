<?php
    $fruits = ["pomme", "fraise" , "poire"];
    echo "<pre>"; print_r($fruits); echo "</pre>";
    // ajt mangue dans tableau
    $fruits[] = "Mangue";
    echo print_r($fruits);
    //supprime poire du tableau
    unset($fruits[2]);
    echo print_r($fruits);
    // remet bien l'indexation
    $fruits = array_values($fruits);
    echo print_r($fruits);
?>