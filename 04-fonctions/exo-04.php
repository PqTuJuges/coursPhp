<?php
// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/**
 * Calcule le montant de la TVA en fonction du prix HT et du taux de TVA.
 *
 * @param float $prixHt Le prix HT dont on veut additionner le montant de la TVA.
 * @param float $tva Le taux de TVA en pourcentage.
 *
 * @return float Le montant de la TVA.
 */
function calculerMontantTvaPrixHT(float $prixHt, float $tva): float
{
    // Calculer et retourner le montant de la TVA.
    return $prixHt * ($tva / 100);
}

/**
 * Calcule le prix TTC en fonction du prix HT et du taux de TVA.
 *
 * @param float $prixHt Le prix HT dont on veut connaître le montant de la TVA.
 * @param float $tva Le taux de TVA en pourcentage.
 *
 * @return float|null Le prix TTC arrondi à 3 décimales.
 */
function ajouterTva(float $prixHt, float $tva): float
{
    // Calculez le montant de la TVA en utilisant la fonction calculerMontantTvaPrixHT().
    $montantTva = calculerMontantTvaPrixHT($prixHt, $tva);

    // Calculez le prix TTC.
    $prixTtc = $prixHt + $montantTva;

    // Arrondissez et retoruner le prix TTC à 3 décimales :
    $prixTtcArrondi = round($prixTtc, 3);
    return $prixTtcArrondi;
}

// Afficher le prix TTC d'un article de 100 euros HT, la TVA est de 21%.
echo ajouterTva(100, 21) . PHP_EOL; // Affiche : 121

// Afficher le prix TTC d'un article de 100 euros HT, la TVA est de 12%.
echo ajouterTva(100, 12) . PHP_EOL; // Affiche : 112
?>