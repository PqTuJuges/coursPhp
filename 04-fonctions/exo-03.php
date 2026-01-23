<?php
// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/**
* Calculer la somme des nombres d'un tableau.
*
* @param array $nombres Les nombres dont il faut calculer la somme.
* @return array Le résultat de la somme et les nombres valides.
*/
function calculerSomme(array $nombres): array
{
    $nombresValides = [];
    $somme = 0;
    // Parcourir les éléments du tableau "$nombres" :
    foreach($nombres as $nombre)
    {
        // Traiter uniquement les valeurs numériques.
        if (is_numeric($nombre))
        {
            // Ajouter la valeur actuelle à la somme.
            $somme += $nombre;
            // Ajouter la valeur valide au tableau.
            $nombresValides[] = $nombre;
        }
    }

    // Retourner un tableau associatif avec la somme ainsi que les nombres valides.
    return [
        $somme,
        $nombresValides
    ];
}

/**
* Calculer la moyenne des nombres d'un tableau.
*
* @param array $nombres Les nombres dont il faut calculer la moyenne.
* @return array Le résultat de la moyenne et les nombres valides.
*/
function calculerMoyenne(array $nombres): array
{
    // Calculer la somme du tableau "$nombres".
    [$somme, $nombresValides] = calculerSomme($nombres);

    // Si "count()" retourne 0, remplacer sa valeur par 1 pour éviter la division par 0.
    $moyenne =  $somme / (count($nombres) ?? 1);

    // Retourner un tableau associatif avec la moyenne ainsi que les nombres valides.
    return [
        $moyenne,
        $nombresValides
    ];
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

/**
* Afficher la moyenne des nombres d'un tableau.
*
* @param array $nombres Les nombres dont il faut afficher la moyenne.
* @return void
*/
function afficherMoyenne(array $nombres): void
{
    // Calculer la moyenne.
    [$moyenne, $nombresValides] = calculerMoyenne($nombres);

    // Utiliser array_diff() pour obtenir les nombres invalides (non-numériques).
    $nombresInvalides = array_diff($nombres, $nombresValides);
    
    // Convertir les tableaux en chaînes de caractères.
    $nombresValidesChaine = convertirTableauEnChaineDeCaracteres($nombresValides);
    $nombresInvalidesChaine = convertirTableauEnChaineDeCaracteres($nombresInvalides);
    
    // Afficher les résultats.
    echo "La moyenne des nombres [ $nombresValidesChaine ] : $moyenne" . PHP_EOL;
    echo "Les valeurs invalides [ $nombresInvalidesChaine ]";
}

// Le tableau dont en veut calculer la moyenne.
$listeDeNombres = [8, 'trois', 7, 6.5, 'cinq', 4.5, 7, 8];

// Afficher la moyenne.
afficherMoyenne($listeDeNombres);
/*
    Affiche :
        La moyenne des nombres [ 8, 7, 6.5, 4.5, 7, 8 ] : 6.8333333333333
        Les valeurs ayant été rejetées ['trois', 'cinq']
*/
?>