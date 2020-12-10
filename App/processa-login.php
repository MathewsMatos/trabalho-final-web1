<?php
    session_start();
    include_once("core/Conexao.php");

    $btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
    if ($btnLogin) {

        $matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        if ((!empty($matricula)) AND (!empty($senha))) {

            $conexao = Conexao::getInstance();

            $sql = $conexao->prepare("select * from tbl_func where reg_func=? LIMIT 1;");
            $sql->execute([$matricula]);
            if($sql->rowCount() == 1){
                $row_usuario = $sql->fetch();
                if(password_verify($senha, $row_usuario['pass'])) {
                    $_SESSION['id_func'] = $row_usuario['id_func'];
                    $_SESSION['nome_func'] = $row_usuario['nome_func'];
                    $_SESSION['email'] = $row_usuario['email'];
                    $_SESSION['reg_func'] = $row_usuario['reg_func'];
                    $_SESSION['tel_func'] = $row_usuario['tel_func'];
                    header("Location: painel.php");

                } else {
                    $_SESSION['msg'] = "Por favor, verifique a matricula e/ou senha.";
                    header("Location: view/login.php");
                }

            }

        } else {
            $_SESSION['msg'] =" Por favor, verifique a matricula e/ou senha.";
            header("Location: view/login.php");
        }
    } else {
        $_SESSION['msg'] = "Página não encontrada";
        header("Location: view/login.php");
    }
