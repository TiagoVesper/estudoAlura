<?php
function listarProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao,
	                          'select p.*, c.nome as categoriaNome from produto as p
						      left join categoria as c on c.id = p.categoriaID');
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos,$produto);
    }
    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao, $categoriaID, $usado){
    $query = "insert into produto (nome, preco, descricao, categoriaID, usado) values ('{$nome}',{$preco}, '{$descricao}', {$categoriaID}, {$usado})";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id){
    $query = "delete from produto where id = {$id}";
    return mysqli_query($conexao, $query);
}
