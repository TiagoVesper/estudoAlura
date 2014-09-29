<?php include("conecta.php");
include("banco-usuario.php");

$usuario = buscaUsuario($conexao, $_POST['email'], $_POST['senha']);

if ($usuario == NULL){
	echo "Usuario não encontrato!";
} else {
	echo "Usuario logado com sucesso!";
}
