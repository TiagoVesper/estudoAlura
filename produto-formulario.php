<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");

$categorias = listarCategorias($conexao);
?>
    <h1>Formulario de produto</h1>
    <form action="adiciona-produto.php" method="post">
        <table class="table">
            <tr>
                <td>Nome:</td>
                <td><input class="form-control" type="text" name="nome"></br></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input class="form-control" type="text" name="preco"></br></td>
            </tr>
	        <tr>
		        <td>Descrição:</td>
		        <td><textarea class="form-control" name="descricao"></textarea></br></td>
	        </tr>
	        <tr>
		        <td>Usado</td>
		        <td><input type="checkbox" name="usado" value="true"></td>
	        </tr>
	        <tr>
		        <td>Categoria:</td>
		        <td>
			        <select name="categoriaID" class="form-control">
				        <?php foreach($categorias as $categoria) : ?>
					        <option value="<?= $categoria['id']?>"><?= $categoria['nome']?></option>
				        <?php endforeach ?>
				    </select>
		        </td>
	        </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
                <td></td>
            </tr>
        </table>
    </form>

<?php
include("rodape.php");

