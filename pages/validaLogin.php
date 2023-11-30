<?php

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
      
    define('HOST', 'localhost');
    define('USER', 'root'); 
    define('PASSWORD', '');
    define('BD', 'cadastro');

    $conn = new mysqli(HOST, USER, PASSWORD, BD);
    // Verificar conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Consulta SQL para verificar o usuário
    $stmt = $conn->prepare("SELECT id_usuario FROM usuarios WHERE email=? AND senha=?");
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();
    $stmt->store_result();
    $qtd_usuarios = $stmt->num_rows;

    $result = []; // Inicializa a variável $result como um array vazio

if ($qtd_usuarios == 1) {
    $result['msg'] = ''; // Definir a chave 'msg' para ser acessível mais tarde
    $result['cod'] = 1;
    echo "<script>location.href='../index.php';</script>";
} else {
    $result['msg'] = 'E-mail e(ou) senha inválidos!';
    $result['cod'] = 0;
}

    // Fechar a conexão
    $conn->close();
} else {
    header("Location: index.php?msg=erro_dados");
    exit;
} 