<?php
// Ce fichier peut importer un autre fichier facultatif.
// Si le fichier est présent, il affichera un séparateur.
// S'il est absent, le programme continue quand même.
include 'separateur.php';

echo "=== MINI PROGRAMME ===" . PHP_EOL;

// Comme on utilise pas le suffixe "_once",
// on peut réutiliser le même fichier plusieurs fois.
include 'separateur.php';