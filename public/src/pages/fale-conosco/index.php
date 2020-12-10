<!--
    Formulario para contato, com campos: nome, email, Telefone com DDD, Assunto, Mensagem.
-->
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../../global.css">
    <title>Gcycle - Fale Conosco</title>
</head>

<body>
    <?php include '../../header.html'; ?>
    <div id="container">
        <form action="../../../../App/send-mail.php" method="post" name="form">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" />
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" />
            </div>
            <div>
                <label for="phone">Telefone com DDD:</label>
                <input type="text" id="phone" />
            </div>
            <div>
                <label for="Assunto">Assunto:</label>
                <input type="text" id="assunto" />
            </div>
            <div>
                <label for="msg">Mensagem:</label>
                <textarea id="msg"></textarea>
            </div>
            <div class="button">
                <button type="submit">Enviar sua mensagem</button>
            </div>
        </form>
    </div>

    <?php include '../../footer.html'; ?>
</body>

</html>