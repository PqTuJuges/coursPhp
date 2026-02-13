<?php
function creerDossier($cheminDossier): bool {
    // Vérifier si le dossier n'existe pas
    if (!is_dir($cheminDossier)) {
        // Tenter de créer le dossier
        if (!mkdir($cheminDossier, 0777, true)) {
            // Échec de la création → retourner false
            return false;
        }
    }
    // Le dossier existe déjà ou a été créé avec succès
    return true;
}