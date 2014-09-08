<?php include("cabecalho.php")?>
<?php include("conecta.php");

$resultado = mysqli_query($conexao,'select * from produto');

while($produto = mysqli_fetch_assoc($resultado)){
    echo $produto['nome'] . '</br>';
}

?>

<?php include("rodape.php")?>