<?php
    $groupeA = ["Mathias", "Yeon"];
    $groupeB = ["Elise" , "Mae"];
    echo print_r($groupeA);
    echo print_r($groupeB);

    echo PHP_EOL;
    //permet de fusionner 2 tableaux
    $groupeComplete = array_merge($groupeA,$groupeB);
    echo "<pre>"; print_r($groupeComplete); echo "</pre>";
?>