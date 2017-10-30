<?php
  /**
   *
   */
  class usuario
  {
    private $nombre;
    private $fechaNac;
    private $email;
    private $edad;

    function __construct(String $elNombre, String $laFecha, String $elEmail)
    {
      $this->nombre = $elNombre;
      $this->fechaNac =$laFecha;
      $this->email =$elEmail ;
    }
    public function saludar(){
          echo $this->getNombre() ;
          // echo $this->nombre ;
    }
    public function setNombre($elNombre) {
    $this->nombre = $elNombre ;
  }
    public function getNombre(){
      return  $this->nombre ;
    }

    public function setEdad($laEdad) {
    $this->edad = $laEdad ;
  }
    public function getEdad(){
      return  $this->edad ;
    }
    public function setEmail($elEmail) {
    $this->email = $elEmail ;
  }
    public function getEmail(){
      return  $this->email ;
        }

}
 ?>
