
<?php

    sessão_inicio();
    if ( $ _SESSION [ 'loggedin' ] != true ){
        header(" local: login.php ");
    }





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
    

   
                