<?php
// Affiche une valeur de manière lisible pendant le développement.
// La balise HTML <pre> est utilisée pour conserver les retours à la ligne
// et l'indentation générés par var_dump(), ce qui rend la sortie plus lisible.
// Ce type de fonction permet de centraliser l'affichage de debug
// et d'éviter de répéter le même code dans tout le projet.
function debug(mixed $valeur): void
{
    echo PHP_EOL;
    echo '--- DEBUG ---' . PHP_EOL;
    var_dump($valeur);
    echo '------------' . PHP_EOL;
}