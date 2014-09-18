<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoriaID = $_POST["categoriaID"];
if (array_key_exists('usado', $_POST)){
	$usado = 'true';
} else {
	$usado = 'false';
}

if(insereProduto($conexao, $nome, $preco, $descricao, $categoriaID, $usado)) { ?>
    <p class="text-success">Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">Produto <?= $nome ?> não foi adicionado: <?= $msg ?></p>
<?php }
include("rodape.php");

