<?php include("cabecalho.php")?>

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
		        <td>Categoria:</td>
		        <td><input type="radio" name="categoriaID" value="1">Esporte</br>
		            <input type="radio" name="categoriaID" value="2">Escolar</br>
		            <input type="radio" name="categoriaID" value="3">Mobilidade</br></td>
	        </tr>
            <tr>
                <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
                <td></td>
            </tr>
        </table>
    </form>

<?php
include("rodape.php");

