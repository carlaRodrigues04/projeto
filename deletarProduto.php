
</head>
<body>
    <h1> Deletar Produto </h1>
    <a href="produtosCadastrados.php"> Produtos Cadastrados </a><br>
    <?php
       require_once "conexao.php";

       $idproduto = $_GET['idproduto'];
       $comando = "DELETE FROM produto WHERE idproduto = $idproduto";
       $result = mysqli_query($conexao, $comando);

       if ($result){
           echo "Produto deletado com sucesso!";
       }
       else{
           echo "erro ao deletar";
       }

    
    ?>
    
</body>
</html>