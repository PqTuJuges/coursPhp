<?php
// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/**
 * Calcule le montant de la TVA en fonction du prix HT et du taux de TVA.
 *
 * @param float $prixHt Le prix HT dont on veut connaître le montant de la TVA.
 * @param float $tva (Facultatif, par défaut 21) Le taux de TVA en pourcentage.
 *
 * @return float|null Le montant de la TVA.
 */
function calculerMontantTvaPrixTTC(float $prixTtc, float $tva = 21): float
{
    // Calculer et retourner le montant de la TVA.
    return ($prixTtc * $tva) / (100 + $tva);
}

/**
 * Calcule le prix HT en fonction du prix TTC et du taux de TVA.
 *
 * @param float $prixTtc Le prix TTC dont on veut soustraire le montant de la TVA.
 * @param float $tva Le taux de TVA en pourcentage.
 *
 * @return float|null Le prix HT arrondi à 3 décimales.
 */
function retirerTva(float $prixTtc, float $tva): float
{
    // Calculez le montant de la TVA en utilisant la fonction calculerMontantTvaPrixTTC().
    $montantTva = calculerMontantTvaPrixTTC($prixTtc, $tva);

    // Calculez le prix HT.
    $prixTtc = $prixTtc - $montantTva;

    // Arrondissez et retoruner le prix HT à 3 décimales :
    $prixTtcArrondi = round($prixTtc, 3);
    return $prixTtcArrondi;
}

// Afficher le prix HT d'un article de 100 euros TTC, la TVA est de 21%.
echo retirerTva(100, 21) . PHP_EOL; // Affiche : 82.645

// Afficher le prix HT d'un article de 100 euros TTC, la TVA est de 12%.
echo retirerTva(100, 12) . PHP_EOL; // Affiche : 89.286
?>