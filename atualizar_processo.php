<a href="produtosCadastrados.php"> Produtos Cadastrados </a><br>
<?php

require "conexao.php";
$nome = $_POST['nomeproduto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['quant_estoque'];
$categ = $_POST['categ'];
$idproduto = $_POST['hdidProduto'];



 $comando = "UPDATE produto SET nomeproduto = '$nome', descricao = '$descricao', preco = '$preco', quant_estoque = '$estoque', categ = '$categ' WHERE idproduto = '$idproduto'";

$rodou = mysqli_query($conexao, $comando);

if ($rodou){
    echo "Atualização feita com sucesso!";
}
else{
    echo mysqli_error($conexao);
}

?>
