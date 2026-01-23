<?php
// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/**
* Calculer la moyenne des nombres d'un tableau.
*
* @param array $nombres Les nombres dont il faut calculer la moyenne.
* @return float Le résultat de la moyenne.
*/
function calculerMoyenne(array $nombres): float
{
    // Comme son nom l'indique, la fonction prédéfinie "array_sum()" retourne la somme des nombres présents dans un tableau.
    $somme = array_sum($nombres);

    // Retourner la moyenne.
    // Si count retourne 0, remplacer sa valeur par 1 pour éviter la division par 0.
    return $somme / (count($nombres) ?? 1);
}

/**
* Convertir un tableau en chaîne de caractères.
*
* @param array $tableau Le tableau à convertir.
* @return string Le résultat de la conversion.
*/
function convertirTableauEnChaineDeCaracteres(array $nombres): string
{
    // Retourner la conversion du tableau.
    return implode(', ', $nombres);
}

// Le tableau dont en veut calculer la moyenne.
$listeDeNombres = [8, 7, 6.5, 4.5, 7, 8];

// Appeler la fonction "calculerMoyenne()" pour calculer les nombres présents dans le tableau "$listeDeNombres".
$moyenne = calculerMoyenne($listeDeNombres);

// Convertir le tableau en chaîne de caractères.
$listeDeNombres = convertirTableauEnChaineDeCaracteres($listeDeNombres);

// Afficher la moyenne.
echo "La moyenne des nombres [ $listeDeNombres ] : $moyenne"; // Affiche : La moyenne des nombres [ 8, 7, 6.5, 4.5, 7, 8 ] : 6.8333333333333
?>