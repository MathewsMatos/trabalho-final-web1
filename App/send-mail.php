<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
  $to = "contato@exemplo.com.br";
  $assunto = "Mensagem de ".$email;
  mail($to,$assunto,$mensagem);
?>