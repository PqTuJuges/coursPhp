<?php
$nombreEnfants = 0;
echo gettype($nombreEnfants);

echo PHP_EOL;

if ($nombreEnfants) {
    echo "Comparaison non stricte réussie : Ce champ est bien rempli";
} else {
    echo "Comparaison non stricte échoue : Ce champ est requis.";
}

echo PHP_EOL;
if ($nombreEnfants === null) {
    echo "Comparaison stricte réussie : Ce champ est requis.";
} else {
    echo "Comparaison stricte échoue : Ce champ est bien rempli";
}
$nullConvertiEnBool          = (bool) null;
$zeroConvertiEnBool          = (bool) 0;
$chaineVideConvertieEnBool   = (bool) "";
$nombreConvertiEnBool        = (bool) 10;
$chaineConvertieEnBool       = (bool) "Bonjour!";

echo "null converti en bool : ";
var_dump($nullConvertiEnBool);

echo "0 converti en bool : ";
var_dump($zeroConvertiEnBool);

echo "Chaîne vide convertie en bool : ";
var_dump($chaineVideConvertieEnBool);

echo "10 converti en bool : ";
var_dump($nombreConvertiEnBool);

echo "\"Bonjour!\" converti en bool : ";
var_dump($chaineConvertieEnBool);
