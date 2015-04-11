<?php
class Tabela
{
   /*declaração de atributos*/
	private $idTabela;
	private $descricao;
	private $tipo;
	private $valor;

    /*Métodos get*/
    function getIdTabela()
	{
		return $this->idTabela;
    }
	
	function getDescricao()
	{
		return $this->descricao;
    }
	
	function getTipo()
	{
		return $this->tipo;
    }
	
    function getValor()
	{
		return $this->valor;
    }
	
    /*Métodos set*/
	function setIdTabela($pIdTabela)
	{
		$this->idTabela = $pIdTabela;
    }
	
	function setDescricao($pDescricao)
	{
		$this->descricao = $pDescricao;
    }
	
	function setTipo($pTipo)
	{
		$this->tipo = $pTipo;
    }
	
	function setValor($pValor)
	{
		$this->valor = $pValor;
    }
	
}
?>