<?php
//importanto a classe Model
include_once("../model/opcionalVeiculo.class.php");
//importanto a classe DAO
include_once("../model/dao/daoOpcionalVeiculo.class.php");

/*Definição da Classe*/
class CtrlOpcionalVeiculo
{

	/*Construtor*/
	function CtrlOpcionalVeiculo(){

	}

	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objOpcionalVeiculo){
	
		/*Pegando os campos do formulário e colocando no model*/
		$objOpcionalVeiculo->setIdOpcional($this->Verifica('txtIdOpcional'));
		$objOpcionalVeiculo->setIdVeiculo($this->Verifica('txtIdVeiculo'));
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objOpcionalVeiculo);
		
	}

	/*função para gravar funcionario, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Gravar($objOpcionalVeiculo);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Adicionar opcional ao veículo", "Opcional adicionado com sucesso!", "atual", "manter");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Adicionar opcional ao veículo", "Erro ao adicionar o opcional ao veículo, por favor, tente novamente!", "atual", "manter");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOpcionalVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de opcional do veículo", "Erro ao localizar o opcional do veículo, por favor, tente novamente!");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Detalhe($objOpcionalVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOpcionalVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Detalhe de opcional do veículo", "Erro ao localizar o opcional do veículo, por favor, tente novamente!");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Alterar($objOpcionalVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Alterar opcional do veículo", "Opcional do veículo alterado com sucesso!", "atual", "manter");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Alterar opcional do veículo", "Erro ao alterar o opcional do veículo , por favor, tente novamente!", "atual", "manter");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Excluir($objOpcionalVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Excluir opcional do veículo", "Opcional do veículo excluido com sucesso!", "atual", "manter");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Excluir opcional do veículo", "Erro ao excluido do veículo o opcional, por favor, tente novamente!", "atual", "manter");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Pesquisa() {	
	
		/*Cria os objetos*/
        $objOpcionalVeiculo = new OpcionalVeiculo();
		$objDaoOpcionalVeiculo = new DaoOpcionalVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcionalVeiculo);

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoOpcionalVeiculo->Pesquisa($objOpcionalVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraTela($objOpcionalVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de opcional do veículo", "Erro ao localizar o opcional do veículo, por favor, tente novamente!");
		}
		
    }
	
}
?>