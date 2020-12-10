<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Gcycle - Acesso restrito</title>
</head>

<body>
    <section>
        <div id=header>
            <h1 class="logo"></h1>
        </div>
        <div id="container">
            <h2>Acesse sua conta</h2><br>
            <?php
                if(isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            <form action="../processa-login.php" method="post">
                <div>
                    <label for="matricula">Digite sua matricula:</label><br>
                    <input type="text" name=matricula id="matricula" />
                </div>
                <div>
                    <label for="password">Senha:</label><br>
                    <input type="password" name=senha id="senha" />
                </div>
                <div>
                    <a class="esqueci" href="recuperar-senha.php">Esqueceu a senha? Clique aqui</a>
                </div>
                <div class="button">
                    <input type="submit" name="btnLogin" value="Entrar">
                </div>
            </form>
        </div>
    </section>
</body>