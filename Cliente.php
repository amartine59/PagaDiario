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
public function setIdentificacion($Id){
  $this->Identificacion = $Id;
}

public function getIdentificacion(){
  return $this->Identificacion;
}

public function setNombre($No){
  $this->Nombres = $No;
}

public function getNombres(){
  return $this->Nombres;
}
public function setApellidos($Ap){
  $this->Apellidos = $Ap;
}

public function getApellidos(){
  return $this->Apellidos;
}

public function setDireccion($Dir){
  $this->Direccion = $Dir;
}

public function getDireccion(){
  return $this->Direccion;
}


public function setTelefono($Tel){
  $this->Telefono = $Tel;
}

public function getTelefono(){
  return $this->Telefono;
}

public function setEstado($Es){
  $this->Estado = $Es;
}

public function getEstado(){
  return $this->Estado;
}


}
?>
