<?php 

session_start();

// obtendo e gaurdando as informacoes disponibilizados no formulario de cadastro
$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$confirmacaoSenha = $_POST['password'];

if($confirmacaoSenha !== $senha) {
    echo "As senhas estao diferentes!";
}
else{
    // criando a conexao com o banco de dados
    $pdo = new PDO("mysql:host=localhost;dbname=minha_app", 'root', 'root'); 
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
    $stmt ->bindParam(':nome', $nome);
    $stmt ->bindParam(':email', $email);
    $stmt ->bindParam(':senha', $senha);

    if ($stmt->execute()) {
        header("Location: index.php");
    }

    else{
        echo "error alguma das informacoes podem estar erradas";
    }
}


?>
