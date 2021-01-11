
</head>
<body>
    <h1> Detalhes do produto </h1>
    <a href="listar_produto.php"> Voltar a página de produtos </a>
    <?php
       require_once "conexao.php";

       $idproduto = $_GET['idproduto'];
       $comando = "SELECT * FROM produto WHERE idproduto = '$idproduto'";
       $result = mysqli_query($conexao, $comando);

      while ( $linha = mysqli_fetch_assoc($result)){
    ?>
       <h2><?php echo $linha['nomeproduto']?></h2>
       <p><?php echo $linha['descricao']?></p>
       <h3> Preço R$: <?php echo $linha['preco']?></h3>
       <p> Quantidade em estoque: <?php echo $linha['quant_estoque']?></p>
       <p> Categoria: <?php echo $linha['categ']?></p>
       <button type= "submit"><a href="compra.php"> COMPRAR </a> </button>




    <?php   
    }
    
    ?>
    
</body>
</html>