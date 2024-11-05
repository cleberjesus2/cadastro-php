<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="processa_cadastro.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        E-mail: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        Confirmação de Senha: <input type="password" name="senha_confirm" required><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
