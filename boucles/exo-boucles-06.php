<?php
    $lignesCommande = [19.99, 5.5, 3.2, 12];
    $total = 0;
    foreach($lignesCommande as $prix){
        $total += $prix; 
    }
    echo "Total de la commande : $total €" . PHP_EOL;
?>