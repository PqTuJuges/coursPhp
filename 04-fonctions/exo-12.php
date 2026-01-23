<?php
// Appliquer la déclaration stricte des types.
declare(strict_types=1);

/**
 * Génère et affiche les termes de la suite de Fibonacci jusqu'au n-ième terme.
 *
 * La suite de Fibonacci est une séquence mathématique dans laquelle chaque terme est la somme des deux termes précédents, en commençant par 0 et 1. Par exemple, les dix premiers termes de la suite sont : 0, 1, 1, 2, 3, 5, 8, 13, 21, 34.
 *
 * @param int $n Le nombre de termes à générer.
 * @param int $a (Paramètre interne, ne pas spécifier) La première valeur de la suite.
 * @param int $b (Paramètre interne, ne pas spécifier) La deuxième valeur de la suite.
 * @param int $compteurRécursion (Paramètre interne, ne pas spécifier) La position actuelle dans la suite.
 * @return array Un tableau contenant les termes de la suite de Fibonacci.
 */
function genererSuiteFibonacci(int $n, int $a = 0, int $b = 1, int $compteurRécursion = 1): array
{
    // Continuer de calculer la suite de Fibonacci jusqu'à ce que le nombre de récursions atteigne la limite spécifiée en argument $n lors de l'appel de la fonction.
    if ($compteurRécursion <= $n)
    {
        // Appeller récursivement la fonction avec les valeurs mises à jour.
        $suiteDeFibo = genererSuiteFibonacci($n, $b, $a + $b, $compteurRécursion + 1);

        // Ajouter la valeur actuelle de la suite de Fibo au début du tableau.
        array_unshift($suiteDeFibo, $a);

        // Retourner le tableau mis à jour.
        return $suiteDeFibo;
    }

    // Initialisation du tableau lors de la dernière récursion ($compteurRécursion > $n).
    // Le tableau est initialisé lors du dernier appel récursif, car à chaque étape de la récursion, la fonction attend la valeur de retour de l'appel suivant avant de renvoyer la sienne.
    return [];
}

// Générer les 10 premiers termes de la suite de Fibonacci.
$n = 10;
$suiteFibo = genererSuiteFibonacci($n);

// Afficher le résultat de la suite de Fibonacci.
echo "Suite de Fibonacci jusqu'au terme F($n) : " . PHP_EOL;
print_r($suiteFibo);
/*
    Affiche : 
    Suite de Fibonacci jusqu'au terme F(10) : 
    Array
    (
        [0] => 0
        [1] => 1
        [2] => 1
        [3] => 2
        [4] => 3
        [5] => 5
        [6] => 8
        [7] => 13
        [8] => 21
        [9] => 34
    )
*/
?>