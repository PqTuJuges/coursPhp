<?php 
    $produits = ['nom' => 'velo', "prix" => 15, "stock" => 45];
    echo print_r($produits);
    echo "Voici le nom  de l'article : {$produits['nom']} et son prix : {$produits['prix']} ";
    
    $produits["stock"] = 60;
    echo PHP_EOL;
    echo print_r($produits);
