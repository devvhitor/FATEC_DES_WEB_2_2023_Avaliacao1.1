<?php
session_start();

if(!isset($_SESSION['logado'])) {
  header('Location: login.php');
  exit();
}

$registros = file('registro.txt');

echo '<ul>';
foreach($registros as $registro) {
  $campos = explode(';', $registro);
  echo '<li>Campo 1: ' . $campos[0] . ', Campo 2: ' . $campos[1] . ', Campo 3: ' . $campos[2] . '</li>';
}
echo '</ul>';
?>