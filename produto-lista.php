<?php include("cabecalho.php")?>
<?php include("conecta.php");

function listarProdutos($conexao){
    $produtos = array();
    $resultado = mysqli_query($conexao,'select * from produto');

    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos,$produto);
    }

    return $produtos;
}

$produtos = listarProdutos($conexao);
foreach($produtos as $produto) {
    echo $produto['nome'];
}

?>

<?php include("rodape.php")?>