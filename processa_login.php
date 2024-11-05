<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("SELECT email FROM usuarios WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

if ($email == $userData['email'] && $senha == $userData['senha']) {
    session_start();
    $_SESSION['user_name'] = $user['nome'];
    // Armazena o IP do usuário no cookie
    setcookie("user_ip", $_SERVER['REMOTE_ADDR'],); 
    header("Location: conteudo.php");
} else {
    echo "Login ou senha inválidos!";
}
?>
