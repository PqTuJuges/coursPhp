<?php
declare(strict_types=1);
/**
 * Vérifie si une entrée utilisateur correspondante à un champ donné est une adresse email valide.
 *
 * @param string $email L'adresse email dont il faut déterminer la validité.
 * 
 * @return bool Retourne "true" si la valeur associée au champ est une adresse email valide, 
 *              sinon "false".
 */
function estValideEmail(string $email): bool
{
    // La fonction prédéfinie "filter_var()" valide et filtre une valeur selon un filtre spécifié.
    // Ici, le filtre utilisé est "FILTER_VALIDATE_EMAIL".
    // Ce filtre vérifie si la valeur fournie est au format d'une adresse email valide.
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Appeler la fonction "estValideEmail()" pour vérifier si l'adresse email "claudy.focan@gmail.com" est valide.
$estEmailRempli = estValideEmail("claudy.focan@gmail.com");
var_dump($estEmailRempli); // Affiche : bool(true)

// Appeler la fonction "estValideEmail()" pour vérifier si l'adresse email "claudy.focan" est valide.
$estEmailRempli = estValideEmail("claudy.focan");
var_dump($estEmailRempli); // Affiche : bool(false)
?>