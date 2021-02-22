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

// $usuario = new Usuario();
// $usuario->login("reinaldo", "!@#$");

// echo $usuario;


//iNSERINDO NOVO USUARIO

// $aluno = new Usuario("aluno", "!@#$5"); // Pega dados do metodo construtor

// $aluno->insert();

// echo $aluno;

//Atualizando dados do usuario

// $usuario = new Usuario();

// $usuario->loadById(9);

// $usuario->update("Irene", "123456");

// echo $usuario;


//Deletando dados do usuario

$usuario = new Usuario();
$usuario->loadById(12);
$usuario->delete();
echo $usuario;

?>