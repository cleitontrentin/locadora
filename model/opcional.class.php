<?php
class Opcional
{
   /*declaração de atributos*/
	private $idOpcional;
	private $descricao;

    /*Métodos get*/
    function getIdOpcional()
	{
		return $this->idOpcional;
    }
	
	function getDescricao()
	{
		return $this->descricao;
    }
	
    /*Métodos set*/
	function setIdOpcional($pIdOpcional)
	{
		$this->idOpcional = $pIdOpcional;
    }
	
	function setDescricao($pDescricao)
	{
		$this->descricao = $pDescricao;
    }

}
?>