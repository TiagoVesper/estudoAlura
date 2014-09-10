<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_GET['id'];
if (removeProduto($conexao, $id)) { ?>
    <p class="text-success">Produto <?= $id ?> removido!</p>
<?php } else {
    $msg = mysqli_error($conexao);?>
    <p class="text-danger">Produto <?= $id ?> não foi removido.<?= $msg ?></p>
<?php } ?>

<?php include("rodape.php"); ?>