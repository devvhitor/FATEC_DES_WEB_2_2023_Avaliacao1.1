<?php
session_start();

// Verifica se o usuário já está logado
if(isset($_SESSION['usuario'])) {
  header('Location: cadastro.php');
  exit;
}

// Verifica se o formulário foi enviado
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Verifica se as credenciais de login estão corretas
  if($_POST['login'] == 'fatec' && $_POST['senha'] == 'araras') {
    $_SESSION['usuario'] = $_POST['login'];
    header('Location: cadastro.php');
    exit;
  } else {
    $erro = 'Login ou senha inválidos.';
  }
}
?>


