<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhar usuários</title>
</head>    
    <h4><a href="usuarios_cadastrados.php">Voltar para página de usuários cadastrados</a></h4>
</head>
<body>
    <h1> Detalhar usuario </h1>
    <?php
       require_once "conexao.php";
       $id_usuario = $_GET['id_usuario'];      
       $comando = "SELECT * FROM usuario WHERE id_usuario = $id_usuario";
       //$comando = "SELECT * FROM usuario u INNER JOIN endereco e ON u.id_usuario = e.id_endereco WHERE u.id_usuario = $id_usuario";

       $result = mysqli_query($conexao, $comando);

      while ( $linha = mysqli_fetch_assoc($result)){
    ?>
        <p>Nome de usuário: <?php echo $linha['nomeusuario']?></p>
        <p>Tipo de usuário: <?php echo $linha['tipousuario']?></p>
        <p>E-mail: <?php echo $linha['email']?></p>
        <p>Senha: <?php echo $linha['senha']?></p>
        <p>Cpf: <?php echo $linha['cpf']?></p>
        <p>Data de nascimento: <?php echo $linha['datadenascimento']?></p>
        <p>Sexo: <?php echo $linha['sexo']?></p>
        <p>Logradouro: <?php echo $linha['logradouro']?></p>
        <p>Número: <?php echo $linha['numero']?></p>
        <p>Complemento: <?php echo $linha['complemento']?></p>
        <p>Bairro: <?php echo $linha['bairro']?></p>
        <p>Cidade: <?php echo $linha['cidade']?></p>
        <p>Cep: <?php echo $linha['cep']?></p>

    <?php   
    }
    ?>
    
</body>
</html>