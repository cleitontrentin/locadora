<?php
class OpcionalVeiculo
{
   /*declaração de atributos*/
	private $idOpcional;
	private $idVeiculo;

    /*Métodos get*/
    function getIdOpcional()
	{
		return $this->idOpcional;
    }
	
	function getIdVeiculo()
	{
		return $this->idVeiculo;
    }
	
    /*Métodos set*/
	function setIdOpcional($pIdOpcional)
	{
		$this->idOpcional = $pIdOpcional;
    }
	
	function setIdVeiculo($pIdVeiculo)
	{
		$this->idVeiculo = $pIdVeiculo;
    }
	
}
?>