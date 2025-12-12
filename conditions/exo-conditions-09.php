<?php

    $lang = null;
    //si je m'étais a la place de null fr j'aurai langue active "fr" car vu que c null donc il va prendr la valeur par defaut qui est "en"  
    $langActive = $lang ?? "en";
    echo "Langue active : $langActive "; 
?>