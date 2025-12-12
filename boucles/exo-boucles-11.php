<?php
    $commandes = [
        ['id' => 'CMD001',
        'lignes' => [10,5.5]],
        ['id' => 'CMD002',
        'lignes' => [20,3,7.5]]
    ];
    foreach($commandes as $lacommande){
        $idCommande = $lacommande['id'];
        $lignes = $lacommande['lignes'];
        $totalCommande = 0;
        foreach($lignes as $leslignes){
            $totalCommande += $leslignes; 
        }
        echo "Commande $idCommande : total $totalCommande €". PHP_EOL;
    }
    
?>