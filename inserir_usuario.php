<h4><a href="listar_produto.php">Voltar a página inicial</a></h4>
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

$comando = "INSERT INTO usuario (nomeusuario, tipousuario, email, senha, cpf, datadenascimento, sexo, logradouro, numero, 
complemento, bairro, cidade, cep) VALUES ('$nome_usu', '$tipo_usu', '$email', '$password', '$cpf', '$data_nasc','$sexo', 
'$logra', '$num', '$comple', '$bairro', '$cidade', '$cep')";

//$comando2 = "INSERT INTO endereco (logradouro, numero, complemento, bairro, cidade, cep, cpf) VALUES ('$logra', '$num', 
//'$comple', '$bairro', '$cidade', '$cep', '$cpf')";

$retorno = mysqli_query($conexao, $comando);

if ($retorno){
    echo "usuário inserido com sucesso!";
}
else{
   echo mysqli_error($conexao);
}

?>