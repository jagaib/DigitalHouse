<?php
include_once("cuenta.php");

  class Black extends Cuenta
  {
    protected $nombre ;
    protected $tarjetas ;
    protected $cuentas ;

    function __construct(String $nombre,int $cbu,int $cuit,int $balance)
    {
      parent::__construct($cbu, $cuit, $balance);
      $this->nombre = $nombre ;

    }

    public function debitar(int $monto, String $desde) {
      $this->balance = $this->balance - $monto;
      $this->ultimomov = new DateTime() ;
    }
    public function acreditar(int $monto) {
      $this->balance = $this->balance+$monto ;
      $this->ultimomov = DateTime() ;
    }
    public function setNombre(string $nombre){
      $this->nombre = $nombre;
    }
    public function getNombre(){
      return $this->nombre;
    }
}
class Platinum extends Cuenta
{
  private $nombre ;
  private $tarjetas ;
  private $cuentas ;


  public function debitar(int $monto, String $desde) {
    parent::$balance = parent::$balance-$monto ;
    parent::$ultimomov = DateTime() ;
  }
  public function acreditar(int $monto) {
    parent::$balance = parent::$balance+$monto ;
    parent::$ultimomov = DateTime() ;
  }
}


 ?>
