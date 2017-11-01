<?php

  abstract class Cuenta
  {
    protected $cbu ;
    protected $balance ;
    protected $ultimomov ;
    protected $cuit ;

    function __construct(int $cbu, int $cuit,int $balance)
    {
      $this->cbu = $cbu ;
      $this->cuit = $cuit ;
      $this->balance = $balance ;
    }

    abstract function debitar(int $monto, String $desde) ;

    public function acreditar(int $monto) {
      $this->balance = $this->balance+$monto ;
      $this->ultimomov = DateTime() ;
    }


  }






 ?>
