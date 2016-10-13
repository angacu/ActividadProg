<?php 

	class ia
	{

//UTILIZACIÓN DE ATRIBUTOS
	public $columna=1 ;
	public $fila=4 ;

//UTILIZACIÓN DE MÉTODOS
	public function getFila(){
	return $this->fila ;

	}

	public function  randomPos() {

	}

	public function getColumna(){
	return $this->columna ;

	}

//UTILIZACIÓN DE SETTERS
	public function setColumna($col){
	$this->columna=$col ;
	}

	public function setFila($fil){
	$this->fila=$fil ;
	}

	}
?> 