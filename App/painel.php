
<?php
    session_start();
    include('core/Conexao.php');
    if($_SESSION['reg_func'] != true){
        header('Location: ../public/src/pages/home/index.php');
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gcycle - Painel do funcionário</title>
</head>
<body>
    <h1><?php echo "Olá ".$_SESSION['nome_func'].", bem vindo(a)!";?></h1>
    <ul>
    <li>
        Cliente
        <ul>
        <li><a href="?controller=ClienteController&method=criar">Novo Cliente</a></li>
        <li><a href="?controller=ClienteController&method=listar">Consultar Cliente</a></li>
        </ul>
    </li>
    <li>
        Reciclaveis
        <ul>
        <li><a href="?controller=TrocaController&method=criar">Receber Reciclado</a></li>
        <li><a href="?controller=TrocaController&method=listar">Consultar Recebidos</a></li>
        <li><a href="?controller=RecicladoController&method=listar">Pontuação por produto</a></li>
        </ul>
    </li>
    <li>
        Resgate de produto
        <ul>
        <li><a href="?controller=ResgateController&method=criar">Novo Pedido</a></li>
        <li><a href="?controller=ResgateController&method=listar">Consultar Pedido</a></li>
        <li><a href="?controller=Produtoontroller&method=listar">Consultar Produtos</a></li>
        </ul>
    </li>
    <!--<li>
    <a href="view/relatorios.php">Relatórios</a></li>
    </li>-->
    <li><a href="view/logout.php">Sair</a></li>
    </ul>
    
</body>
</html>