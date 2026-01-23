<?php
declare(strict_types=1);

function estRempli(string $nomDuChamp, array $entreesUtilisateur): bool
{   
    return isset($entreesUtilisateur[$nomDuChamp]) && trim($entreesUtilisateur[$nomDuChamp]) !== '';
}

function estValideEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function respecteLongueurMinimale(string $entreeUtilisateur, int $longueurMin): bool
{
    return mb_strlen($entreeUtilisateur) >= $longueurMin;
}

function respecteLongueurMaximale(string $entreeUtilisateur, int $longueurMax): bool
{
    return mb_strlen($entreeUtilisateur) <= $longueurMax;
}

function respecteLongueurMinEtMax(string $entreeUtilisateur, int $longueurMin, int $longueurMax): bool
{
    return (respecteLongueurMinimale($entreeUtilisateur, $longueurMin) && respecteLongueurMaximale($entreeUtilisateur, $longueurMax));
}

/**
 * Vérifie la validité des entrées utilisateur selon un ensemble de règles définies pour chaque champ.
 * 
 * @param array $reglesDesChamps Un tableau associatif contenant les règles de validation pour chaque champ.
 *        Chaque clé textuelle représente un nom de champ, et la valeur est un tableau contenant les règles à appliquer.
 * @param array $entreesUtilisateur Un tableau associatif contenant les données soumises par l'utilisateur.
 *        Chaque clé textuelle représente un champ, et la valeur est l'entrée utilisateur du champ.
 *
 * @return array Retourne un tableau associatif contenant les messages d'erreur pour chaque champ invalide.
 *        La clé textuelle du tableau est le nom du champ, et la valeur est le message d'erreur correspondant.
 *        Si un champ est valide, il n'apparaît pas dans le tableau retourné.
 */
function verifierValiditeChamps(array $reglesDesChamps, array $entreesUtilisateur): array
{
    // Initialiser le tableau des messages d'erreur.
    // Si l'entrée utilisateur d'un champ est invalide, un message sera ajoutée dans le tableau sous la clé textuelle portant le nom du champ concerné.
    $messagesErreur = [];

    // Parcourir les règles des champs configurée dans le tableau "$reglesDesChamps" pour vérifier la validité des entrées utilisateur :
    foreach ($reglesDesChamps as $nomDuChamp => $reglesDuChamp)
    {
        // Vérifier si le champ a été rempli.
        $estChampRempli = estRempli($nomDuChamp, $entreesUtilisateur);

        // Vérifier si la règle "requis" est configurée et, le cas échéant, si le champ n'a pas été rempli :
        if (isset($reglesDuChamp['requis']) && $reglesDuChamp['requis'] === true && !$estChampRempli)
        {
            $messagesErreur[$nomDuChamp] = "Ce champs est requis!";
        }
        // Si le champ a bien été rempli, vérifier les autres règles :
        elseif ($estChampRempli)
        {
            // Vérifie si la règle "type" est configurée avec la valeur "email" et, le cas échéant, s'assure que l'entrée utilisateur est un email valide :
            if (isset($reglesDuChamp['type']) && $reglesDuChamp['type'] === 'email' && !estValideEmail($entreesUtilisateur[$nomDuChamp]))
            {
                $messagesErreur[$nomDuChamp] = "Email invalide!";
            }
            // Vérifie si les règles "longueurMin" et "longueurMax" sont configurées et, le cas échéant, s'assure que la longueur de l'entrée utilisateur est comprise entre la valeur minimale (incluse) et la valeur maximale (incluse) :
            elseif (isset($reglesDuChamp['longueurMin']) && isset($reglesDuChamp['longueurMax']) && !respecteLongueurMinEtMax($entreesUtilisateur[$nomDuChamp], $reglesDuChamp['longueurMin'], $reglesDuChamp['longueurMax']))
            {
                $messagesErreur[$nomDuChamp] = "Ce champ doit doit comprendre entre {$reglesDuChamp['longueurMin']} et {$reglesDuChamp['longueurMax']} caractères!";
            }
            // Vérifie si la règle "longueurMin" est configurée et, le cas échéant, s'assure que la longueur de l'entrée utilisateur est supérieure ou égale à la valeur spécifiée :
            elseif (isset($reglesDuChamp['longueurMin']) && !respecteLongueurMinimale($entreesUtilisateur[$nomDuChamp], $reglesDuChamp['longueurMin']))
            {
                $messagesErreur[$nomDuChamp] = "Ce champ doit comprendre au moins {$reglesDuChamp['longueurMin']} caractères!";
            }
            // Vérifie si la règle "longueurMax" est configurée et, le cas échéant, s'assure que la longueur de l'entrée utilsiateur ne dépasse pas la valeur spécifiée :
            elseif (isset($reglesDuChamp['longueurMax']) && !respecteLongueurMaximale($entreesUtilisateur[$nomDuChamp], $reglesDuChamp['longueurMax']))
            {
                $messagesErreur[$nomDuChamp] = "Ce champ doit comprendre au maximum {$reglesDuChamp['longueurMin']} caractères!";
            }
        }
    }

    // Retourner le tableau des messages d'erreur.
    return $messagesErreur;
}

// Les règles des champs du formulaires
$regleDesChamps = [
    'nom' => [
        'requis' => true,
        'longueurMin' => 2,
        'longueurMax' => 255
    ],
    'email' => [
        'requis' => true,
        'type' => 'email'
    ]
];

// Simulation d'entrées utilisateur valides provenant d'un formulaire.
$entreesUtilisateurValides = [
    'nom' => 'Claudy',
    'email' => 'claudy.focan@gmail.com'
];

// Simulation d'entrées utilisateur invalides provenant d'un formulaire.
$entreesUtilisateurInvalides = [
    'email' => 'claudy.focan'
];

// Appeler la fonction "verifierValiditeChamps()" pour vérifier si les entrées utilisateurs respectent les règles de champ du formulaire.
$erreurs = verifierValiditeChamps($regleDesChamps, $entreesUtilisateurValides);
print_r($erreurs);
/*
    Affiche :
        Array
        (
        )
*/

// Appeler la fonction "verifierValiditeChamps()" pour vérifier si les entrées utilisateurs respectent les règles de champ du formulaire.
$erreurs = verifierValiditeChamps($regleDesChamps, $entreesUtilisateurInvalides);
print_r($erreurs);
/*
    Affiche :
        Array
        (
            [nom] => Ce champs est requis!
            [email] => Email invalide!
        )
*/
?>