<?php
$titulo = "EvoluIA - Bem-Estar Emocional";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="img/logo.png" alt="Logo EvoluIA" class="logo">
        
        </header>

        <main>
            <h1><?php echo "Sua Jornada<br>Começa Aqui"; ?></h1>

            <img src="img/meio.png" alt="Ilustração Meditação" class="imagem">

            <p><?php echo "Estamos aqui para te apoiar em cada passo.<br>
            Responda algumas perguntas para começarmos"; ?></p>

            <form action="perguntas.php" method="post">
                <button type="submit" class="botao">Começar</button>
            </form>
        </main>
    </div>
</body>
</html>