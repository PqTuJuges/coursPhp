<?php
$roles = ["admin", "editor", "user"];
var_dump(in_array("admin",$roles));
var_dump(in_array("guest",$roles));
// si true ca veut dire que l'element est dedans sinon pas on le voit grace a var_dump et le echo fonctionne pas ici donc mieux utiliser var_dump
?>