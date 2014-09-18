<?php
function listarCategorias($conexao){
	$categorias = array();
	$resultado = mysqli_query($conexao,'select * from categoria');
	while($categoria = mysqli_fetch_assoc($resultado)){
		array_push($categorias,$categoria);
	}
	return $categorias;
}