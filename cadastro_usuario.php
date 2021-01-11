<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
</head>
<body>
    <h1>Cadastro de usuários</h1>
    <form action="inserir_usuario.php" method="POST"> 

        <p>Nome de usuário: <input type= "text" name="nomeusuario"></p>
        <p>Tipo de usuário: <select name="tipousuario"><option value = "adm"> Administrador </option>
        <option value = "comum"> Usuário Comum</option></select></p>
        <p>E-mail: <input type= "text" name="email"></p>
        <p>Senha: <input type= "password" name="senha"></p>
        <p>Cpf: <input type= "number" name="cpf"></p>
        <p>Data de nascimento: <input type= "date" name="datadenascimento"></p>
        <p>Sexo: <input type= "radio" value="M" name="sexo"> Masculino
        <input type= "radio" value="F" name="sexo"> Feminino</p>

    <h1>Endereço</h1>

        <p>Logradouro: <input type= "text" name="logradouro"></p>
        <p>Número: <input type= "number" name="numero"></p>
        <p>Complemento: <input type= "text" name="complemento"></p>
        <p>Bairro: <input type= "text" name="bairro"></p>
        <p>Cidade: <input type= "text" name="cidade"></p>
        <p>Cep: <input type= "number" name="cep"></p>

        <button type= "submit"> Salvar </button>
    </form>
</body>
</html>