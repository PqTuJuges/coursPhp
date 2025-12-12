<?php
    $texte = "L'été avance doucement";
    $stock  = mb_strlen($texte,"UTF-8");
    for($i = 0; $i < $stock;$i++){
        $caract = mb_substr($texte,$i,1);
        echo "Caractère $i détecté : $caract" . PHP_EOL ;
    }
?>