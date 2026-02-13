<?php
declare(strict_types=1);
require_once __DIR__ . "/src/chemins.php";
require_once __DIR__ . "/src/creerDossier.php";
require_once __DIR__ . "/src/json.php";
echo getRacineProjet() . PHP_EOL;
echo getDossierData() . PHP_EOL;
echo getDossierListes() . PHP_EOL;
echo getDossierListe('test123'). PHP_EOL;
echo getCheminListeJson('test123') . PHP_EOL;
echo getCheminHistoriqueJson('test123'). PHP_EOL;
$ok= creerDossier(getRacineProjet() . '/test');
if ($ok = true){
    echo "OK. Dossier de test prêt.";
}else{
    echo "Erreur. Impossible de créer le dossier de test.";
}
$cheminFichierInexistant = getDossierData() . '/fichier_inexistant.json';
$resultat = lireJsonTableau($cheminFichierInexistant);
echo "Résultat fichier inexistant :\n";
print_r($resultat);

$cheminFichierExistant = getRacineProjet() . '/imports/exemple-liste.json';
$listeImport = lireJsonTableau($cheminFichierExistant);
echo "\nRésultat fichier existant :\n";
print_r($listeImport);