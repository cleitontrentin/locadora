<?php
class Juridica
{
   /*declaração de atributos*/
	private $idJuridica;
	private $cnpj;

    /*Métodos get*/
    function getIdCliente()
	{
		return $this->idCliente;
    }
	
	function getCnpj()
	{
		return $this->cnpj;
    }
	
    /*Métodos set*/
	function setIdCliente($pIdCliente)
	{
		$this->idCliente = $pIdCliente;
    }
	
	function setCnpj($pCnpj)
	{
		$this->cnpj = $pCnpj;
    }

}
?>