<?php
    $limite = 10;
    $nombres = [];
    for($i=0;$i<$limite;$i++){
        $nombres[] = $i + 1;
    }
    print_r($nombres);

    for($i = 0; $i <count($nombres); $i++){
        echo "A l'index $i , la valeur est {$nombres[$i]}" . PHP_EOL;
    }
?>