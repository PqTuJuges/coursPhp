<?php
$message = 'coucou petite perruche !';
echo $messageRemplace = str_replace("coucou", "Au revoir", "coucou petite perruche !");

echo PHP_EOL;

echo $messageMajPremiereLettre = ucfirst($message);

echo PHP_EOL;

echo $messageMajuscules = strtoupper($message);

echo PHP_EOL;

echo $message;

// message n'a pas changé car on l'a attribué chaque fois une nouvelle variable ou on fiat la modif 
?>