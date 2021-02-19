<?php

require_once("config.php");

//Carrega um usuario
$root = new Usuario();
$root->loadbyId(3);
echo $root;

//Carrega uma lista de usuarios
$list = Usuario::getList();
?>