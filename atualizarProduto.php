<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require_once "conexao.php";
$idproduto = $_GET['idproduto'];
$comando = "SELECT * FROM produto WHERE idproduto = $idproduto";
$resul = mysqli_query($conexao, $comando);
$linha = mysqli_fetch_assoc($resul);
?>

    <h1>Alterar Produto</h1>
    <form action="atualizar_processo.php" method="POST"> 

       <input type="hidden" name="hdidProduto" value="<?=$linha ['idproduto']?>">

        Nome do Produto: <input type= "text" name="nomeproduto" value="<?= $linha['nomeproduto']?>"><br>
        Descrição: <input type= "text" name="descricao"value="<?= $linha['descricao']?>"><br>
        Preço: <input type= "text" name="preco"value="<?= $linha['preco']?>"><br>
        Quantidade em estoque: <input type= "text" name="quant_estoque"value="<?= $linha['quant_estoque']?>"><br>
        Selecione a categoria: <select name="categ">
        <option value="Filmes">Temática de filme</option>
       <option value="Series">Temática de série</option>

       
            
        </select>
        <br>        <br>

        <button type= "submit"> Salvar </button>
    </form>
</body>
</html>