<?php
//importanto a classe Model
include_once("../model/tabelaVeiculo.class.php");
//importanto a classe DAO
include_once("../model/dao/daoTabelaVeiculo.class.php");

/*Definição da Classe*/
class CtrlTabelaVeiculo
{

	/*Construtor*/
	function CtrlTabelaVeiculo(){

	}

	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objTabelaVeiculo){
	
		/*Pegando os campos do formulário e colocando no model*/
		$objTabelaVeiculo->setIdTabela($this->Verifica('txtIdTabela'));
		$objTabelaVeiculo->setIdVeiculo($this->Verifica('txtIdVeiculo'));
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objTabelaVeiculo = new TabelaVeiculo();
		$objDaoTabelaVeiculo = new DaoTabelaVeiculo();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objTabelaVeiculo);
		
	}

	/*função para gravar funcionario, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objTabelaVeiculo = new TabelaVeiculo();
		$objDaoTabelaVeiculo = new DaoTabelaVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabelaVeiculo);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoTabelaVeiculo->Gravar($objTabelaVeiculo);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Adicionar tabela ao veículo", "Tabela adicionado com sucesso!", "atual", "manter");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Adicionar tabela ao veículo", "Erro ao adicionar o tabela ao veículo, por favor, tente novamente!", "atual", "manter");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objTabelaVeiculo = new TabelaVeiculo();
		$objDaoTabelaVeiculo = new DaoTabelaVeiculo();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoTabelaVeiculo->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objTabelaVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de tabela do veículo", "Erro ao localizar a tabela de preço do veículo, por favor, tente novamente!");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objTabelaVeiculo = new TabelaVeiculo();
		$objDaoTabelaVeiculo = new DaoTabelaVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabelaVeiculo);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoTabelaVeiculo->Detalhe($objTabelaVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objTabelaVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Detalhe da tabela de preço do veículo", "Erro ao localizar a tabela de preço do veículo, por favor, tente novamente!");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objTabelaVeiculo = new TabelaVeiculo();
		$objDaoTabelaVeiculo = new DaoTabelaVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabelaVeiculo);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoTabelaVeiculo->Alterar($objTabelaVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Alterar tabela de preço do veículo", "Tabela de preço do veículo alterado com sucesso!", "atual", "manter");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Alterar tabela de preço do veículo", "Erro ao alterar a tabela de preço do veículo , por favor, tente novamente!", "atual", "manter");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objTabelaVeiculo = new TabelaVeiculo();
		$objDaoTabelaVeiculo = new DaoTabelaVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabelaVeiculo);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoTabelaVeiculo->Excluir($objTabelaVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Excluir tabela de preço do veículo", "Tabela de preço do veículo excluido com sucesso!", "atual", "manter");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Excluir tabela de preço do veículo", "Erro ao excluido a tabela de preço do veículo, por favor, tente novamente!", "atual", "manter");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Pesquisa() {	
	
		/*Cria os objetos*/
        $objTabelaVeiculo = new TabelaVeiculo();
		$objDaoTabelaVeiculo = new DaoTabelaVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabelaVeiculo);

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoTabelaVeiculo->Pesquisa($objTabelaVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraTela($objTabelaVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de tabela de preço do veículo", "Erro ao localizar a tabela de preço do veículo, por favor, tente novamente!");
		}
		
    }
	
}
?>