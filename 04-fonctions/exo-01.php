<?php
declare(strict_types=1);

/**
 * Calculer et afficher la moyenne des nombres d'un tableau.
 *
 * @param array $nombres Les nombres dont il faut calculer la moyenne.
 * @return void  La fonction ne renvoie pas de valeur en dehors de son bloc.
 */
function afficherMoyenne(array $nombres): void
{
    // Comme son nom l'indique, la fonction prédéfinie "array_sum()" retourne la somme des nombres présents dans un tableau.
    $somme = array_sum($nombres);

    // On calcul la moyenne à l'aide de la somme et de la fonction prédéfinie "count()" qui permet de récupérer le nombre d'élément présents dans un tableau.
    // Si "count()" retourne 0, remplacer sa valeur par 1 pour éviter la division par 0.
    $moyenne =  $somme / (count($nombres) ?? 1);

    // La fonction prédéfinie "implode()" permet de convertir un tableau en chaîne de caractères.
    /* 
         implode(string $separator, array $array): string 
            $separator : la chaîne de caractère utilisée pour séparée les éléments du tableau dans la chaîne de caractères en sortie.
            $array : le tableau dont on veut réaliser la conversion.
    */
    $listeNombres = implode(', ', $nombres);

    // Afficher le tableau ainsi que la moyenne de ses éléments.
    echo "La moyenne des nombres [ $listeNombres ] : $moyenne";
}

$listeDeNombres = [8, 7, 6.5, 4.5, 7, 8];
// Appeler la fonction "afficherMoyenne()" pour afficher la liste des nombres du tableau $listeDeNombres, ainsi que leur moyenne.
afficherMoyenne($listeDeNombres); // Affiche : La moyenne des nombres [ 8, 7, 6.5, 4.5, 7, 8 ] : 6.8333333333333
?>