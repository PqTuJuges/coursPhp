<?php 
    $classe = [
        ['prenom' => 'Mathias' , 'age' => 23,'ville' => 'Bruxelles'],
        ['prenom' => 'Mae' , 'age' => 22,'ville' => 'Bruxelles']

];

    echo "<pre>";echo print_r($classe);echo "</pre>";
    echo $classe[1]['prenom'];
    echo $classe[1]['ville'];
    $classe[2]['prenom'] = 'Sarah';
    echo "<pre>";echo print_r($classe);echo "</pre>";
?>