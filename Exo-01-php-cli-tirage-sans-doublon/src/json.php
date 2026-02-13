<?php
function lireJsonTableau(string $cheminFichier): array
{
    // Vérifier si le fichier existe
    if (!file_exists($cheminFichier)) {
        return [];
    }

    // Lire le contenu du fichier
    $contenu = file_get_contents($cheminFichier);
    if ($contenu === false) {
        return [];
    }

    // Vérifier si le contenu est vide
    if (trim($contenu) === '') {
        return [];
    }

    // Convertir le JSON en tableau PHP
    $data = json_decode($contenu, true);

    // Vérifier que le résultat est bien un tableau
    if (!is_array($data)) {
        return [];
    }

    return $data;
}