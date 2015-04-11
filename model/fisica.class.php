<?php
class Fisica
{
   /*declaração de atributos*/
	private $idCliente;
	private $cpf;

    /*Métodos get*/
    function getIdCliente()
	{
		return $this->idCliente;
    }
	
	function getCpf()
	{
		return $this->cpf;
    }
	
    /*Métodos set*/
	function setIdCliente($pIdCliente)
	{
		$this->idCliente = $pIdCliente;
    }
	
	function setCpf($pCpf)
	{
		$this->cpf = $pCpf;
    }

}
?>