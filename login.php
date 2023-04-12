<?php
session_start();

// Verifica se o usuário já está logado
if(isset($_SESSION['usuario'])) {
  header('Location: dashboard.php');
  exit;
}

// Verifica se o formulário foi enviado
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Verifica se as credenciais de login estão corretas
  if($_POST['login'] == 'fatec' && $_POST['senha'] == 'araras') {
    $_SESSION['usuario'] = $_POST['login'];
    header('Location: dashboard.php');
    exit;
  } else {
    $erro = 'Login ou senha inválidos.';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <?php if(isset($erro)): ?>
    <p><?php echo $erro; ?></p>
  <?php endif; ?>

  <form method="POST">
    <label for="login">Login:</label>
    <input type="text" id="login" name="login"><br><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha"><br><br>

    <input type="submit" value="Entrar">
  </form>
</body>
</html>
