<?php

require_once("config.php");

//Carrega somente um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista =  Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários pelo login
//$search = Usuario::search("us");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "54321");

echo $usuario;
?>