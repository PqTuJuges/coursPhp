<?php
    $utilisateurs = [
        'u123' => 'admin',
        'u456' => 'editor',
        'u789' => 'user'
    ];
    foreach($utilisateurs as $id => $role){
        echo "Utilisateur ID $id possède le rôle $role." . PHP_EOL;
    }
?>