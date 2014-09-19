<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias = listarCategorias($conexao);
$usado = $produto['usado'] ? "checked = 'checked'" : "";
?>
    <h1>Alterar produto</h1>
    <form action="altera-produto.php" method="post">
        <table class="table">
	        <input type="hidden" name="id" value="<?=$produto['id']?>">
            <tr>
                <td>Nome:</td>
                <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></br></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input class="form-control" type="text" name="preco" value="<?=$produto['preco']?>"></br></td>
            </tr>
	        <tr>
		        <td>Descrição:</td>
		        <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></br></td>
	        </tr>
	        <tr>
		        <td>Usado</td>
		        <td><input type="checkbox" name="usado" <?=$usado?> value="true"></td>
	        </tr>
	        <tr>
		        <td>Categoria:</td>
		        <td>
			        <select name="categoriaID" class="form-control">
				        <?php foreach($categorias as $categoria) :
					        $categoriaSelecionada = $produto['categoriaID'] == $categoria['id'];
							$selecao = $categoriaSelecionada ? "selected = 'selected'" : ""; ?>
					        <option value="<?= $categoria['id']?>" <?=$selecao?>><?= $categoria['nome']?></option>
				        <?php endforeach ?>
				    </select>
		        </td>
	        </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Alterar"></td>
                <td></td>
            </tr>
        </table>
    </form>

<?php
include("rodape.php");

