<?php
declare(strict_types=1);
/**
 * Vérifie si une clé textuelle est présente dans le tableau des entrées utilisateur et que la valeur associée n'est pas vide.
 *
 * @param string $nomDuChamp La clé textuelle à vérifier dans le tableau des entrées utilisateur.
 * @param array $entreesUtilisateur Le tableau contenant les données utilisateur à valider.
 * 
 * @return bool Retourne "true" si la clé est présente et la valeur associée n'est pas vide (après trimming), 
 *              sinon "false".
 */
function estRempli(string $nomDuChamp, array $entreesUtilisateur): bool
{   
    // La fonction "isset()" permet de vérifier si la variable passée en argument existe,
    // elle retourne "true" si celle-ci existe, sinon elle retourne "false".

    // Pour vérifier qu'une chaîne n'est pas vide, il est recommandé d'utiliser l'opérateur strictement différent "!=="
    // pour comparer la valeur à une chaîne vide plutôt que d'utiliser la fonction "empty()".
    // En effet, "empty()" est trop permissive et considère des valeurs comme "0" comme vides,
    // ce qui peut entraîner des erreurs dans les validations de formulaire.

    // La fonction "trim()" permet de retirer tous les espaces au début et à la fin d'une chaîne de caractères.
    // Par exemple : trim("   blablabla    ") retourne "blablabla".
    return isset($entreesUtilisateur[$nomDuChamp]) && trim($entreesUtilisateur[$nomDuChamp]) !== '';
}

// Simulation d'entrées utilisateur provenant d'un formulaire.
$entreesUtilisateur = [
    'nom' => 'Claudy',
    'email' => 'claudy.focan@gmail.com'
];

// Appeler la fonction "estRempli()" pour vérifier que le champ requis nommé "nom" a bien été rempli.
$estNomRempli = estRempli("nom", $entreesUtilisateur);
var_dump($estNomRempli); // Affiche : bool(true)

// Appeler la fonction "estRempli()" pour vérifier que le champ requis nommé "prenom" a bien été rempli.
$estPrenomRempli = estRempli("prenom", $entreesUtilisateur);
var_dump($estPrenomRempli); // Affiche : bool(false)
?>