<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $senha = htmlspecialchars($_POST["senha"]);

    $mensagem = "Conta criada com sucesso! Bem-vindo, $nome.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Conta </title>
    <link rel="stylesheet" href="css/cadas.css" />
</head>
<body>
    <div class="background"></div>

    <div class="card">
        <img class="logo" src="img/logo.png" alt="Logo" />
        <h2>Começe sua jornada Agora </h2>
        <?php if (!empty($mensagem)): ?>
            <p class="mensagem"><?php echo $mensagem; ?></p>
        <?php endif; ?>

        <form class="form" method="POST" action="">
            <input type="text" name="nome" placeholder="Seu Nome" required />
            <input type="email" name="email" placeholder="Seu Email" required />
            <input type="senha" name="senha" placeholder="Sua Senha" required />
           
            <button type="submit">Começar</button>
        </form>

        <footer>
           Já tem uma conta?
            <a href="login.php">Entre aqui</a>
        </footer>
    </div>
</body>
</html>