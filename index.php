<?php

require_once ("config.php");


//carrega um usuário apenas
//$root = new Usuario();

//$root->loadById(4);

//echo $root;


//lista de usuarios:
//$lista = Usuario::getList();

//echo json_encode($lista);


//Carrega uma lista de Usuarios buscando pelo login:

//$search = Usuario::search("jo");

//echo json_encode($search);


//carrega um usuario usando o login e a senha:
$usuario = new Usuario();
$usuario->login("Cleito", "Clei123");

echo $usuario;
?>
