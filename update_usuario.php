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
require "conexao.php";
$nome_usu = $_POST['nomeusuario'];
$tipo_usu = $_POST['tipousuario'];
$email = $_POST['email'];
$password = $_POST['senha'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['datadenascimento'];
$sexo = $_POST['sexo'];
$logra = $_POST['logradouro'];
$num = $_POST['numero'];
$comple = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$id_usuario = $_POST['hdidUsuario'];

$comando = "UPDATE usuario SET nomeusuario = '$nome_usu', tipousuario = '$tipo_usu', email = '$email', senha = '$password',
cpf = '$cpf', datadenascimento = '$data_nasc', sexo = '$sexo', logradouro = '$logra', numero = '$num', complemento = '$comple',
bairro = '$bairro', cidade = '$cidade', cep = '$cep' WHERE id_usuario = $id_usuario";

//$comando = "UPDATE usuario u INNER JOIN endereco e ON u.id_usuario = e.id_endereco SET u.id_usuario = '$id_usuario', nomeusuario = '$nome_usu', tipousuario = '$tipo_usu', email = '$email', senha = '$password', cpf = '$cpf', 
//datadenascimento = '$data_nasc', sexo = '$sexo', logradouro = '$logra', numero = '$num', complemento = '$comple', bairro = '$bairro', cidade = '$cidade', cep = '$cep' WHERE u.id_usuario = $id_usuario";

$rodou = mysqli_query($conexao, $comando);

if ($rodou){
    echo "Atualização feita com sucesso!";
}
else{
    echo mysqli_error($conexao);
}

?>
</body>
</html>