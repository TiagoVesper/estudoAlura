<?php
function listarProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao,'select * from produto');
    while($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos,$produto);
    }
    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $descricao){
    $query = "insert into produto (nome, preco, descricao) values ('{$nome}',{$preco}, '{$descricao}')";
    return mysqli_query($conexao, $query);
}

function removeProduto($conexao, $id){
    $query = "delete from produto where id = {$id}";
    return mysqli_query($conexao, $query);
}
