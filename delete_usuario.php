<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <h4><a href="usuarios_cadastrados.php">Voltar para página de usuários cadastrados</a></h4>
    <title>Deletar usuários</title>
</head></head>
<body>
    <h1> Deletar usuário </h1>
    <?php
       require_once "conexao.php";

       $id_usuario = $_GET['id_usuario'];
       $comando = "DELETE FROM usuario WHERE id_usuario = $id_usuario";
       $result = mysqli_query($conexao, $comando);

       if ($result){
           echo "Usuário deletado com sucesso!";
       }
       else{
           echo "erro ao deletar";
       }

    
    ?>
    
</body>
</html>