<?php
class Servicios{
private $id;
private $agua;
private $gas;
private $electricidad;
private $aseo;
private $acceso_comunidad;


public function getId(){
    return $this->id;
}

public function setId($id){
    $this->id = $id;
}

public function getAgua(){
    return $this->agua;
}

public function setAgua($agua){
    $this->agua = $agua;
}

public function getGas(){
    return $this->gas;
}

public function setGas($gas){
    $this->gas = $gas;
}

public function getElectricidad(){
    return $this->electricidad;
}

public function setElectricidad($electricidad){
    $this->electricidad = $electricidad;
}

public function getAseo(){
    return $this->aseo;
}

public function setAseo($aseo){
    $this->aseo = $aseo;
}

public function getAcceso_comunidad(){
    return $this->acceso_comunidad;
}

public function setAcceso_comunidad($acceso_comunidad){
    $this->acceso_comunidad = $acceso_comunidad;
}
}


?>