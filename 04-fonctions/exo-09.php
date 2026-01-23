<?php
declare(strict_types=1);
/**
 * Vérifie si la longueur d'une entrée utilisateur correspondante à un champ donné respecte à la fois une longueur minimale et une longueur maximale spécifiée.
 *
 * La fonction utilise deux autres fonctions ("respecteLongueurMinimale" et "respecteLongueurMaximale") pour valider que la longueur de la valeur du champ est à la fois supérieure ou égale à la longueur minimale et inférieure ou égale à la longueur maximale.
 *
 * @param string $entreeUtilisateur La chaîne de caractère à valider.
 * @param int $longueurMin La longueur minimale requise pour que la validation réussisse.
 * @param int $longueurMax La longueur maximale autorisée pour que la validation réussisse.
 * 
 * @return bool Retourne "true" si la longueur de la valeur associée au champ est à la fois supérieure ou égale à la longueur minimale et inférieure ou égale à la longueur maximale, 
 *              sinon "false".
 */
function respecteLongueurMinEtMax(string $entreeUtilisateur, int $longueurMin, int $longueurMax): bool
{
    return (respecteLongueurMinimale($entreeUtilisateur, $longueurMin) && respecteLongueurMaximale($entreeUtilisateur, $longueurMax));
}

// Appeler la fonction "respecteLongueurMinEtMax()" pour vérifier si le nombre de caractères de la chaîne "saperlipopette" est comprise entre 2 et 30 caractères.
$estLongueurValide = respecteLongueurMinEtMax("saperlipopette", 2, 30);
var_dump($estLongueurValide); // Affiche : bool(true)

// Appeler la fonction "respecteLongueurMinEtMax()" pour vérifier si le nombre de caractères de la chaîne "saperlipopette" est comprise entre 2 et 8 caractères.
$estLongueurValide = respecteLongueurMinEtMax("saperlipopette", 2, 8);
var_dump($estLongueurValide); // Affiche : bool(false)
?>