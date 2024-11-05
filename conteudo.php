<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    die("Acesso negado!");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Conteúdo</title>
</head>
<body>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario_nome']; ?>!</h2>
    <p>Esta é uma área de conteúdo exclusiva.</p>
    <a href="index.php">Sair</a>
</body>
</html>
