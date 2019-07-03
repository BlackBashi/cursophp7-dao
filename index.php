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
//$usuario = new Usuario();
//$usuario->login("Cleito", "Clei123");

//echo $usuario;

// Criando um novo usuario
/*
$aluno = new Usuario("aluno1", "@aluno1");

$aluno->setDeslogin("aluno");
$aluno->setDesenha("@aluno");

$aluno->insert();

echo $aluno;
*/
/* //ALTERAR UM USUARIO
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "prfssr123");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(5);

$usuario->delete();

echo $usuario;

?>
