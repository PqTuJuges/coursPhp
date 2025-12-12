<?php
$points = readline("Entrez votre nb de point de fidelité : ");
$label = "";
if ($points < 100) {
    $label =  "Client standard";
} else {
    $label =  "Client premium";
}

echo "Statut du client : " . $label;
