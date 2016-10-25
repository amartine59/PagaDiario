<?php

Class Cliente{

private $Identificacion;
private $Nombres;
private $Apellidos;
Private $Direccion;
private $Telefono;
private $Estado;

public function __construct($Id=null, $No=null, $Ap=null, $Dir=null, $Tel=null, $Es=null ){

$this->Identificacion = $Id;
$this->Nombres = $No;
$this->Apellidos = $Ap;
$this->Direccion = $Dir;
$this->Telefono= $Tel;
$this->Estado= $Es;

}
public function set($v,$n)
{
  $this->$v=$n;
}
public function get($n)
{
  return $this->$n;
}
}
?>
