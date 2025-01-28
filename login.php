<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $_SESSION['email'] = $email;
        header('location: index.html');
    } else {
        $error = "Usuário ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="natal.css">
    <title>Login</title>
</head>
<body>
    <div class="container" style="width: 400px;">
        <h2>Login</h2>
        <form method="post" action="">
            <label for="email"><p>Email:</p></label>
            <input type="email" name="email" required>
            <label for="senha"><p>Senha:</p></label>
            <input type="password" name="senha" required>
            <button type="submit" style="margin-bottom: 30px;">Entrar</button>
            <?php if (isset($error)) echo "<p class='message error'>$error</p>"; ?>
        </form>
    </div>
</body>
</html>
