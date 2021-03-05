<?php
class Menores{
    private $id;
    private $ninos_menores;
    private $total_menores;
    private $detalle_empleados;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNinos_menores(){
		return $this->ninos_menores;
	}

	public function setNinos_menores($ninos_menores){
		$this->ninos_menores = $ninos_menores;
	}

	public function getTotal_menores(){
		return $this->total_menores;
	}

	public function setTotal_menores($total_menores){
		$this->total_menores = $total_menores;
	}

	public function getDetalle_empleados(){
		return $this->detalle_empleados;
	}

	public function setDetalle_empleados($detalle_empleados){
		$this->detalle_empleados = $detalle_empleados;
	}
}
	


?>