<?php
    $texteOriginal = "Élévation du niveau d'été";
    $correspondances = [
    'é' => 'e',
    'è' => 'e',
    'ê' => 'e',
    'à' => 'a',
    'â' => 'a',
    'î' => 'i',
    'ô' => 'o',
    'ù' => 'u',
    'É' => 'E'
];
$texteNettoye = "";
$nbcara = mb_strlen($texteOriginal);
for($i = 0; $i < $nbcara; $i++){
    $caract = mb_substr($texteOriginal,$i,1);

    if(array_key_exists($caract,$correspondances)){
        $texteNettoye .= $correspondances[$caract]; 
    }else{
        $texteNettoye .= $caract;
    }
}
echo "Texte nettoyé : $texteNettoye" . PHP_EOL;
?>