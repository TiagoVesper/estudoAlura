<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_POST['id'];
if (removeProduto($conexao, $id)) {
	header("location: produto-lista.php?removido=true");
	die();
 } else {
    $msg = mysqli_error($conexao);?>
    <p class="text-danger">Produto <?= $id ?> não foi removido.<?= $msg ?></p>
<?php }

include("rodape.php");