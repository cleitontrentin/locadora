<?php
class locacao
{
	/*declaração de atributos*/
	private $idLocacao;
	private $idCliente;
	private $idVeiculo;
	private $idFuncionario;
	private $dtLocacao;
	private $kmLocacao;
	private $dtEntrega;
	private $kmEntrega;

    /*Métodos get*/
    function getIdLocacao()
	{
		return $this->idLocacao;
    }
	
    function getIdCliente()
	{
		return $this->idCliente;
    }
	
    function getIdVeiculo()
	{
		return $this->idVeiculo;
    }
	
    function getIdFuncionario()
	{
		return $this->idFuncionario;
    }
	
    function getDtLocacao()
	{
		return $this->dtLocacao;
    }
	
    function getKmLocacao()
	{
		return $this->kmLocacao;
    }
	
    function getDtEntrega()
	{
		return $this->dtEntrega;
    }
	
    function getKmEntrega()
	{
		return $this->kmEntrega;
    }
	
    /*Métodos set*/
	function setIdLocacao($pIdLocacao)
	{
		$this->idLocacao = $pIdLocacao;
    }

	function setIdCliente($pIdCliente)
	{
		$this->idCliente = $pIdCliente;
    }

	function setIdVeiculo($pIdVeiculo)
	{
		$this->idVeiculo = $pIdVeiculo;
    }
	
	function setIdFuncionario($pIdFuncionario)
	{
		$this->idFuncionario = $pIdFuncionario;
    }
	
	function setDtLocacao($pDtLocacao)
	{
		$this->dtLocacao = $pDtLocacao;
    }
	
	function setKmLocacao($pKmLocacao)
	{
		$this->kmLocacao = $pKmLocacao;
    }

	function setDtEntrega($pDtEntrega)
	{
		$this->dtEntrega = $pDtEntrega;
    }
	
	function setKmEntrega($pKmEntrega)
	{
		$this->kmEntrega = $pKmEntrega;
    }
	
}
?>