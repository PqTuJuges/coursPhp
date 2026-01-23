<?php
declare(strict_types=1);

/**
 * Vérifie si la longueur d'une entrée utilisateur correspondante à un champ donné est inférieure ou égale à une longueur maximale spécifiée.
 *
 * @param string $entreeUtilisateur La chaîne de caractère à valider.
 * @param int $longueurMax La longueur maximale requise pour que la validation réussisse.
 * 
 * @return bool Retourne "true" si la longueur de la valeur associée au champ est inférieure ou égale à la longueur maximale spécifiée, 
 *              sinon "false".
 */
function respecteLongueurMaximale(string $entreeUtilisateur, int $longueurMax): bool
{
    // Contrairement à la fonction prédéfinie "strlen()", qui calcule la taille d'une chaîne en comptant le nombre d'octets (ce qui inclut plusieurs octets pour les lettres accentuées), 
    // "mb_strlen()" compte chaque caractère individuellement, même si ce caractère est représenté par plusieurs octets dans l'encodage.
    return mb_strlen($entreeUtilisateur) <= $longueurMax;
}

// Appeler la fonction "respecteLongueurMaximale()" pour vérifier si la chaîne "saperlipopette" ne dépasse pas la limites de 30 caractères.
$estLongueurValide = respecteLongueurMaximale("saperlipopette", 30);
var_dump($estLongueurValide ); // Affiche : bool(true)

// Appeler la fonction "respecteLongueurMaximale()" pour vérifier si la chaîne "saperlipopette" ne dépasse pas les limites de 2 caractères.
$estLongueurValide = respecteLongueurMaximale("saperlipopette", 2);
var_dump($estLongueurValide ); // Affiche : bool(false)
?>