<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualizar usuario</title>
    <h4><a href="usuarios_cadastrados.php">Voltar para página de usuários cadastrados</a></h4>
</head>
<body>
<?php
require_once "conexao.php";
       $id_usuario = $_GET['id_usuario'];
       $comando = "SELECT * FROM usuario WHERE id_usuario = $id_usuario";
       //$comando = "SELECT * FROM usuario u INNER JOIN endereco e ON u.id_usuario = e.id_endereco 
       //WHERE u.id_usuario = $id_usuario";
       $resul = mysqli_query($conexao, $comando);
       $linha = mysqli_fetch_assoc($resul);
?>
    <h1>Alterar usuario</h1>
    <form action="update_usuario.php" method="POST"> 
   
    <input type="hidden" name="hdidUsuario" value="<?=$linha ['id_usuario']?>">

        Nome de usuário: <input type= "text" name="nomeusuario"value="<?= $linha['nomeusuario']?>"><br>
        Tipo de usuário: <select name="tipousuario"><option value = "adm"> Administrador </option>
        <option value = "comum"> Usuário Comum</option></select><br>
        E-mail: <input type= "text" email="email"value="<?= $linha['email']?>"><br>
        Senha: <input type= "password" name="senha"value="<?= $linha['senha']?>"><br>
        Cpf: <input type= "number" name="cpf"value="<?= $linha['cpf']?>"><br>
        Data de nascimento: <input type= "date" name="datadenascimento"value="<?= $linha['datadenascimento']?>"><br>
        Logradouro: <input type= "text" name="logradouro"value="<?= $linha['logradouro']?>"><br>
        Número: <input type= "number" name="numero"value="<?= $linha['numero']?>"><br>
        Complemento: <input type= "text" name="complemento"value="<?= $linha['complemento']?>"><br>
        Bairro: <input type= "text" name="bairro"value="<?= $linha['bairro']?>"><br>
        Cidade: <input type= "text" name="cidade"value="<?= $linha['cidade']?>"><br>
        Cep: <input type= "number" name="cep"value="<?= $linha['cep']?>"><br>
        <button type= "submit"> Salvar </button>
    </form>
</body>
</html>
