<?php

require_once("config.php");

//Carrega um usurio
// $root = new Usuario();
// $root->loadById(6);
// echo $root;


//Carrega uma lista de usuarios

// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lit de usuarios buscando pelo login

// $search = Usuario::search("e");
// echo json_encode($search);

//Carrega usuario logado

$usuario = new Usuario();
$usuario->login("reinaldo", "!@#$");

echo $usuario;




?>