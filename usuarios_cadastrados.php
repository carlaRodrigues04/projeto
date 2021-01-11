<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários cadastrados</title>
</head>
<body>
<h1> Usuários cadastrados</h1>
<a href="cadastro_usuario.php"> Cadastrar usuário </a>
    <?php
       require_once "conexao.php";
       $comando = "SELECT * FROM usuario";
       $result = mysqli_query($conexao, $comando);

      while ( $linha = mysqli_fetch_assoc($result)){
    ?>
       <h2>Cadastro usuário: <?php echo $linha['nomeusuario']?></h2>
       <a href="detalhar_usuario.php?id_usuario=<?=$linha['id_usuario']?>">Ver usuario</a>
       <a href="delete_usuario.php?id_usuario=<?=$linha['id_usuario']?>">Excluir usuario</a>
       <a href="att_usuario.php?id_usuario=<?=$linha['id_usuario']?>">Atualizar usuario</a>


    <?php   
    }
    ?>
    <h4><a href="pagAdm.php"> Voltar a página do administrador </h4>
</body>
</html>