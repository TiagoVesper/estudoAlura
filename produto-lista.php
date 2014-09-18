<?php
include("cabecalho.php");
include("conecta.php");
include("banco-produto.php"); ?>
</br>
<?php if (array_key_exists('removido',$_GET) && $_GET['removido'] == 'true')
	echo '<p class="alert-success">Produto removido com sucesso.</p>';
?>

<table class="table table-striped table-bordered">
    <th>Nome</th>
    <th>Preço</th>
	<th>Categoria</th>
	<th>Descrição</th>
    <th>Ação</th>
    <?php
    $produtos = listarProdutos($conexao);
    foreach($produtos as $produto) : ?>
        <tr>
            <td><?=$produto['nome']?></td>
            <td><?=$produto['preco']?></td>
	        <td><?=$produto['categoriaNome']?></td>
	        <td><?=$produto['descricao']?></td>
            <td>
	            <form action="remove-produto.php" method="post">
		            <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn btn-danger">remover</button>
		        </form>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<?php include("rodape.php");