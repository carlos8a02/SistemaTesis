<?php
class Viviendas{
    private $id;
    private $vivienda;
    private $tipos_vivienda;
    private $otras_viviendas;

    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getVivienda(){
		return $this->vivienda;
	}

	public function setVivienda($vivienda){
		$this->vivienda = $vivienda;
	}

	public function getTipos_viviendas(){
		return $this->tipos_viviendas;
	}

	public function setTipos_viviendas($tipos_viviendas){
		$this->tipos_viviendas = $tipos_viviendas;
	}

	public function getOtras_vivienda(){
		return $this->otras_vivienda;
	}

	public function setOtras_vivienda($otras_vivienda){
		$this->otras_vivienda = $otras_vivienda;
	}
}

?>