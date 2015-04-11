<?php
class Cliente
{
   /*declaração de atributos*/
	private $idCliente;
	private $nome;
	private $rua;
	private $numero;
	private $complemento;
	private $bairro;
	private $cep;
	private $cidade;
	private $estado;
	private $foneResidencial;
	private $foneCelular;
	private $foneReferencia;

	



    /*Métodos get*/
    function getIdCliente()
	{
		return $this->idCliente;
    }
	
	function getNome()
	{
		return $this->nome;
    }
	
    function getRua()
	{
		return $this->rua;
    }
	
    function getNumero()
	{
		return $this->numero;
    }
	
    function getComplemento()
	{
		return $this->complemento;
    }
	
    function getBairro()
	{
		return $this->bairro;
    }
	
    function getCep()
	{
		return $this->cep;
    }
	
    function getCidade()
	{
		return $this->cidade;
    }
	
    function getEstado()
	{
		return $this->estado;
    }
	
    function getFoneResidencial()
	{
		return $this->foneResidencial;
    }
	
    function getFoneCelular()
	{
		return $this->foneCelular;
    }
	
    function getFoneReferencia()
	{
		return $this->foneReferencia;
    }
	

    /*Métodos set*/
	function setIdCliente($pIdCliente)
	{
		$this->idCliente = $pIdCliente;
    }
	
	function setNome($pNome)
	{
		$this->nome = $pNome;
    }
	
	function setRua($pRua)
	{
		$this->rua = $pRua;
    }
	
	function setNumero($pNumero)
	{
		$this->numero = $pNumero;
    }
	
	function setComplemento($pComplemento)
	{
		$this->complemento = $pComplemento;
    }
	
	function setBairro($pBairro)
	{
		$this->bairro = $pBairro;
    }
	
	function setCep($pCep)
	{
		$this->cep = $pCep;
    }
	
	function setCidade($pCidade)
	{
		$this->cidade = $pCidade;
    }
	
	function setEstado($pEstado)
	{
		$this->estado = $pEstado;
    }
	
	function setFoneResidencial($pFoneResidencial)
	{
		$this->foneResidencial = $pFoneResidencial;
    }
	
	function setFoneCelular($pFoneCelular)
	{
		$this->foneCelular = $pFoneCelular;
    }
	
	function setFoneReferencia($pFoneReferencia)
	{
		$this->foneReferencia = $pFoneReferencia;
    }
	

}
?>