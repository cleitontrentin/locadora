<?php
class Veiculo
{
   /*declaração de atributos*/
	private $idVeiculo;
	private $marca;
	private $modelo;
    private $anoFabricacao;
    private $anoModelo;
	private $placa;
	private $combustivel;
	private $foto;

    /*Métodos get*/
    function getIdVeiculo()
	{
		return $this->idVeiculo;
    }

	function getMarca()
	{
		return $this->marca;
    }

    function getModelo()
	{
		return $this->modelo;
    }

    function getAnoFabricacao()
	{
		return $this->anoFabricacao;
    }

    function getAnoModelo()
	{
		return $this->anoModelo;
    }

    function getPlaca()
	{
		return $this->placa;
    }

    function getCombustivel()
	{
		return $this->combustivel;
    }

    function getFoto()
	{
		return $this->foto;
    }

    /*Métodos set*/
	function setIdVeiculo($pIdVeiculo)
	{
		$this->idVeiculo = $pIdVeiculo;
    }

    function setMarca($pMarca) 
	{
		$this->marca = $pMarca;
    }

    function setModelo($pModelo)
	{
		$this->modelo = $pModelo;
    }

    function setAnoFabricacao($pAnoFabricacao)
	{
		$this->anoFabricacao = $pAnoFabricacao;
    }

    function setAnoModelo($pAnoModelo)
	{
		$this->anoModelo = $pAnoModelo;
    }

    function setPlaca($pPlaca)
	{
		$this->placa = $pPlaca;
    }

    function setCombustivel($pCombustivel)
	{
		$this->combustivel = $pCombustivel;
    }

    function setFoto($pFoto)
	{
		$this->foto = $pFoto;
    }

}
?>