<?php
    $produits = [
        ['nom' => 'clavier',
        'stock' => 0],
        ['nom' => 'Souris',
        'stock' => 0],
        ['nom' => 'Ecran',
        'stock' => 3]
    ];
    $produitsEnRupture = 0;
    for($i=0;$i< count($produits);$i++){
        $nomProduit = $produits[$i]['nom'];
        $stockProduit = $produits[$i]['stock'];
        if($stockProduit == 0){
            echo "Produit $nomProduit en rupture de stock." . PHP_EOL;
            $produitsEnRupture++;
        }
    }
    echo "Nombre total de produits en rupture : $produitsEnRupture";
?>