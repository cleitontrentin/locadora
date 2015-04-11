<?php
class TabelaVeiculo
{
   /*declaração de atributos*/
	private $idTabela;
	private $idVeiculo;

    /*Métodos get*/
    function getIdTabela()
	{
		return $this->idTabela;
    }
	
	function getIdVeiculo()
	{
		return $this->idVeiculo;
    }
	
    /*Métodos set*/
	function setIdTabela($pIdTabela)
	{
		$this->idTabela = $pIdTabela;
    }
	
	function setIdVeiculo($pIdVeiculo)
	{
		$this->idVeiculo = $pIdVeiculo;
    }
	
}
?>