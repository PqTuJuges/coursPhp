<?php
declare(strict_types=1);

/**
 * Vérifie si la longueur d'une entrée utilisateur correspondante à un champ donné est supérieure ou égale à une longueur minimale spécifiée.
 *
 * @param string $entreeUtilisateur La chaîne de caractère à valider.
 * @param int $longueurMin La longueur minimale requise pour que la validation réussisse.
 * 
 * @return bool Retourne "true" si la longueur de la valeur associée au champ est supérieure ou égale à la longueur minimale spécifiée, 
 *              sinon "false".
 */
function respecteLongueurMinimale(string $entreeUtilisateur, int $longueurMin): bool
{
    // Contrairement à la fonction prédéfinie "strlen()", qui calcule la taille d'une chaîne en comptant le nombre d'octets (ce qui inclut plusieurs octets pour les lettres accentuées), 
    // "mb_strlen()" compte chaque caractère individuellement, même si ce caractère est représenté par plusieurs octets dans l'encodage.
    return mb_strlen($entreeUtilisateur) >= $longueurMin;
}


// Appeler la fonction "respecteLongueurMinimale()" pour vérifier si la chaîne "saperlipopette" possède au moins 2 caractères.
$estLongueurValide = respecteLongueurMinimale("saperlipopette", 2);
var_dump($estLongueurValide ); // Affiche : bool(true)

// Appeler la fonction "respecteLongueurMinimale()" pour vérifier si la chaîne "saperlipopette" possède au moins 30 caractères.
$estLongueurValide = respecteLongueurMinimale("saperlipopette", 30);
var_dump($estLongueurValide ); // Affiche : bool(false)
?>