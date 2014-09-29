<?php include("cabecalho.php");?>

<h1>Bem vindo!</h1>

<h2>Login</h2>
<form action="login.php" method="post">
    <table class="table">
        <tr>
            <td>Email:</td>
            <td><input class="form-control" type="email" name="email"></br></td>
        </tr>
        <tr>
            <td>Senha:</td>
            <td><input class="form-control" type="password" name="senha"></br></td>
        </tr>
		<tr>
			<td><button class="btn btn-primary">Login</button></td>
			<td></td>
		</tr>
	</table>
</form>

<?php include("rodape.php");

