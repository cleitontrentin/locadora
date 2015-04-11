<?php
//importanto a classe Model
include_once("../model/veiculo.class.php");
//importanto a classe DAO
include_once("../model/dao/daoVeiculo.class.php");

/*Definição da Classe*/
class CtrlVeiculo
{

	/*Construtor*/
	function CtrlVeiculo(){

	}

	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objVeiculo){
	
		//echo $this->Verifica('txtFoto');
	
		/*Pegando os campos do formulário e colocando no model*/
		$objVeiculo->setIdVeiculo($this->Verifica('txtIdVeiculo'));
		$objVeiculo->setMarca($this->Verifica('txtMarca'));
		$objVeiculo->setModelo($this->Verifica('txtModelo'));
		$objVeiculo->setPlaca($this->Verifica('txtPlaca'));
		$objVeiculo->setAnoFabricacao($this->Verifica('txtAnoFabricacao'));
		$objVeiculo->setAnoModelo($this->Verifica('txtAnoModelo'));
		$objVeiculo->setCombustivel($this->Verifica('txtCombustivel'));
		$objVeiculo->setFoto($this->Verifica('txtFoto'));
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objVeiculo = new Veiculo();
		$objDaoVeiculo = new DaoVeiculo();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objVeiculo);
		
	}

	/*função para gravar o veiculo, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objVeiculo = new Veiculo();
		$objDaoVeiculo = new DaoVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objVeiculo);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoVeiculo->Gravar($objVeiculo);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Cadastro de veículo", "Veículo salvo com sucesso!", "veiculo", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Cadastro de veículo", "Erro ao salvar o veículo, por favor, tente novamente!", "veiculo", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objVeiculo = new Veiculo();
		$objDaoVeiculo = new DaoVeiculo();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoVeiculo->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de veículo", "Erro ao localizar o veículo, por favor, tente novamente!");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objVeiculo = new Veiculo();
		$objDaoVeiculo = new DaoVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objVeiculo);
		
		/*Enviando para o banco de dados*/
		$ListaObjetos[0] = $objDaoVeiculo->ListarOpcional($objVeiculo);		
		$ListaObjetos[1] = $objDaoVeiculo->ListarTabela($objVeiculo);		
		$retorno = $objDaoVeiculo->Detalhe($objVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objVeiculo, $retorno, $ListaObjetos);
		}else{
			$objSendForm->mostraMsg("ERRO", "Detalhe de veículo", "Erro ao localizar o veículo, por favor, tente novamente!");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objVeiculo = new Veiculo();
		$objDaoVeiculo = new DaoVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objVeiculo);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoVeiculo->Alterar($objVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Alterar veículo", "Veículo alterado com sucesso!", "veiculo", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Alterar veículo", "Erro ao alterar o veículo, por favor, tente novamente!", "veiculo", "principal");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objVeiculo = new Veiculo();
		$objDaoVeiculo = new DaoVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objVeiculo);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoVeiculo->Excluir($objVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Excluir veículo", "Veículo excluido com sucesso!", "veiculo", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Excluir veículo", "Erro ao excluido o veículo, por favor, tente novamente!", "veiculo", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Pesquisa() {	
	
		/*Cria os objetos*/
        $objVeiculo = new Veiculo();
		$objDaoVeiculo = new DaoVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objVeiculo);

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoVeiculo->Pesquisa($objVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraTela($objVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de veículo", "Erro ao localizar o veículo, por favor, tente novamente!");
		}
		
    }


	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function SiteLista() 
	{
		/*Cria os objetos*/
        $objVeiculo = new Veiculo();
		$objDaoVeiculo = new DaoVeiculo();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoVeiculo->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTelaSite($objVeiculo, $retorno);
		}else{
			$objSendForm->mostraMsg("INFO", "Lista de veículo", "Não foi possível localizar os veículos, por favor, tente novamente!");
		}

    }
	
	public function SiteDetalhe() 
	{
        /*Cria os objetos*/
        $objVeiculo = new Veiculo();
		$objDaoVeiculo = new DaoVeiculo();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objVeiculo);
		
		/*Enviando para o banco de dados*/
		$ListaObjetos[0] = $objDaoVeiculo->ListarOpcional($objVeiculo);		
		$ListaObjetos[1] = $objDaoVeiculo->ListarTabela($objVeiculo);		
		$retorno = $objDaoVeiculo->Detalhe($objVeiculo);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTelaSite($objVeiculo, $retorno, $ListaObjetos);
		}else{
			$objSendForm->mostraMsg("INFO", "Detalhe do veículo", "Não foi possível localizar os dados do veículo, por favor, tente novamente!");
		}

    }
}
?>