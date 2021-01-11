<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Produto</h1>
    <form action="inserir_produto.php" method="POST"> 

        <p>Produto: <input type= "text" name="nomeproduto"></p>
        <p>Descrição: <input type= "text" name="descricao"></p>
        <p>Preço R$: <input type= "number" name="preco"></p>
        <p>Quantidade em estoque: <input type= "num" name="quant_estoque"></p>
        <p>Selecione a categoria:</p>
        <select name="categ">
       <option value="Filmes">Temática de filme</option>
       <option value="Series">Temática de série</option>
       </select>
    
        

        

        <button type= "submit"> Cadastrar </button>
    </form>
    <h4><a href="pagAdm.php"> Voltar a página do administrador </h4>
</body>
</html>