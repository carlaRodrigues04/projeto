<body>
    <h1>Produtos cadastrados </h1>
    <h4><a href="cadastroProduto.php"> Cadastrar Produto </a></h4>
    <?php
       require_once "conexao.php";
       $comando = "SELECT * FROM produto";
       $result = mysqli_query($conexao, $comando);

      while ( $linha = mysqli_fetch_assoc($result)){
    ?>
       <h2>Produto: <?php echo $linha['nomeproduto']?></h2>
       <p> Quantidade em estoque: <?php echo $linha['quant_estoque']?></p>
       <a href="detalhar.php?idproduto=<?=$linha['idproduto']?>">Ver produto</a>
       <a href="deletarProduto.php?idproduto=<?=$linha['idproduto']?>">Excluir produto</a>
       <a href="atualizarProduto.php?idproduto=<?=$linha['idproduto']?>">Alterar produto</a>

       

    <?php   
    }
    ?>
    <h4><a href="pagAdm.php"> Voltar a página do administrador </h4>
    
</body>
</html>