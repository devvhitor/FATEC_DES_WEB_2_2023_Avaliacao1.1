<?php
session_start();

if(!isset($_SESSION['logado'])) {
  header('Location: login.php');
  exit();
}

if(isset($_POST['campo1']) && isset($_POST['campo2']) && isset($_POST['campo3'])) {
  $linha = $_POST['campo1'] . ';' . $_POST['campo2'] . ';' . $_POST['campo3'] . "\n";
  file_put_contents('dados.txt', $linha, FILE_APPEND);
  echo '<p>Cadastro realizado com sucesso!</p>';
}
?>

<form method="post">
  <label for="campo1">Campo 1:</label>
  <input type="nome do livro " name="campo1" required><br>
  <label for="campo2">Campo 2:</label>
  <input type="data emprestimo" name="campo2" required><br>
  <label for="campo3">Campo 3:</label>
  <input type="editora " name="campo3" required><br>
  <button type="submit">Cadastrar</button>
</form>
