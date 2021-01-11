
<body>
     <h1> NETSHIRTS </h1>
    <strong>CAMISETAS PERSONALIZADAS COM A TEMÁTICA DE SÉRIES E FILMES</strong>
    <h4><a href="cadastro_usuario.php"> CADASTRE - SE </a></h4>
    
    
    <?php
       require_once "conexao.php";
       $comando = "SELECT * FROM produto";
       $result = mysqli_query($conexao, $comando);

      while ( $linha = mysqli_fetch_assoc($result)){
    ?>
       <h2><?php echo $linha['nomeproduto']?></h2>
       <h3> Preço R$: <?php echo $linha['preco']?></h3>
       <a href="detalhar.php?idproduto=<?=$linha['idproduto']?>">Mais detalhes do produto</a><br>
      
       

    <?php   
    }
    
    ?>
     <h4><a href="pagAdm.php"> PÁGINA DO ADMINISTRADOR </a></h4>
     <h4><a href="Sobrealoja.php"> SOBRE NOSSA LOJA </a></h4>
   
    
</body>
</html>