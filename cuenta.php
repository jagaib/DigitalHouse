<?php

  abstract class Cuenta
  {
    protected cbu ;
    protected balance ;
    protected ultimomov ;
    protected tipo ;

    function __construct(int $cbu, String $tipo)
    {
      $this->cbu = $cbu ;
      $this->cbu = $tipo ;
    }

    abstract function debtar(int $monto, String $desde) ;
    }
    public function acreditar(int $monto) {
      $this->balance = $this->balance+$monto ;
      $this->ultimomov = DateTime() ;
    }


  }






 ?>
