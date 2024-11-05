<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="processa_login.php" method="POST">
        E-mail: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="submit" value="Entrar">
    </form>
    <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
</body>
</html>
