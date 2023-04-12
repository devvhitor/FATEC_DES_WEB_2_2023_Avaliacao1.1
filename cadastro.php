<html>
<head>
    <title>Gerenciando Registros</title>
</head>
<body>
Preencha os campos abaixo:
<form method="post" action="gerencia-registro.php?acao=adicionar">
    <table>
        <tr>
            <td>Nome do Livro:</td>
            <td>
                <input name="formnomelivro" maxlenght=64>
            </td>
        </tr>
        <tr>
            <td>Nome do Autor:</td>
            <td>
                <input name="formnomeautor" maxlenght=32>
            </td>
        </tr>
        <tr>
            <td>Nome da Editora:</td>
            <td>
                <input name="formnomeeditora" maxlenght=16>
            </td>
        </tr>
        <tr>
            <td colspan=2 align=right>
                <input type="reset" value="Limpar">
				<input type="submit" value="Cadastrar">
			</td>	
		</tr>
    </table>
</form>
</body>
</html>

<?php


    sessão_inicio();
    if ( $ _SESSION [ 'loggedin' ] != true ){
        header(" local: login.php ");
    }

?>

<?php

class Livro {
  private $id;
  private $titulo;
  private $autor;
  private $disponivel;

  public function __construct($id, $titulo, $autor, $disponivel) {
    $this->id = $id;
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->disponivel = $disponivel;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getTitulo() {
    return $this->titulo;
  }

  public function setTitulo($titulo) {
    $this->titulo = $titulo;
  }

  public function getAutor() {
    return $this->autor;
  }

  public function setAutor($autor) {
    $this->autor = $autor;
  }

  public function getDisponivel() {
    return $this->disponivel;
  }

  public function setDisponivel($disponivel) {
    $this->disponivel = $disponivel;
  }

  public function emprestar() {
    $this->disponivel = false;
  }

  public function devolver() {    
    

   
                