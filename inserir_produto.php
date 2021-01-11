<a href="produtosCadastrados.php"> Produtos Cadastrados </a><br>
<?php

require "conexao.php";
$nome = $_POST['nomeproduto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$estoque = $_POST['quant_estoque'];
$categ = $_POST['categ'];


$comando = "INSERT INTO produto (nomeproduto, descricao, preco, quant_estoque, categ) VALUES ('$nome', '$descricao', '$preco', '$estoque', '$categ')";

$retorno = mysqli_query($conexao, $comando);

if ($retorno){
    echo "Produto inserido com sucesso!";
}
else{
   echo mysqli_error($conexao);
}

?>