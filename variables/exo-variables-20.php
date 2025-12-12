<?php
$prenom = "Alex";

$fruits = ["pomme", "banane", "kiwi"];

$produit = [
    "nom"    => "Clavier mécanique",
    "prixHT" => 80
];

$tauxTVA = 0.21;
echo "Bonjour {$prenom}, bienvenue dans la boutique.";
echo PHP_EOL;
echo "Votre fruit n°1 du jour est {$fruits[0]}.";
echo PHP_EOL;
echo "Le prix ttc est : " . $prixTTC = $produit["prixHT"] * (1+ $tauxTVA);
echo PHP_EOL;
echo "Le produit {$produit['nom']} coûte {$prixTTC} € TTC.";
echo PHP_EOL;
echo "Le produit " . $produit["nom"] . " coûte " . $prixTTC . " € TTC.";
echo PHP_EOL;




?>