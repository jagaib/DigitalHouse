<?php

  /**
   *
   */
  class Black extends Cuenta
  {
    public function debtar(int $monto, String $desde) {
      parent::balance = $this->balance-$monto ;
      parent::ultimomov = DateTime() ;
    }
    public function acreditar(int $monto) {
      parent::balance = $this->balance+$monto ;
      parent::ultimomov = DateTime() ;
    }
    {
      # code...
    }
  class Platinum extends Cuenta
    {

  function __construct(argument)
      {
        # code...
      }
  class Gold extends Cuenta
      {

  function __construct(argument)
        {
          # code...
        }
  class Classic extends Cuenta
        {

  function __construct(argument)
          {
            # code...
          }

  }


 ?>
