<?php
//importanto a classe Model
include_once("../model/cliente.class.php");
//importanto a classe DAO
include_once("../model/dao/daoCliente.class.php");

/*Definição da Classe*/
class CtrlCliente
{

	/*Construtor*/
	function CtrlCliente(){

	}

	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objCliente){
	
		/*Pegando os campos do formulário e colocando no model*/
		$objCliente->setIdCliente($this->Verifica('txtIdCliente'));
		$objCliente->setNome($this->Verifica('txtNome'));
		$objCliente->setRua($this->Verifica('txtRua'));
		$objCliente->setNumero($this->Verifica('txtNumero'));
		$objCliente->setComplemento($this->Verifica('txtComplemento'));
		$objCliente->setBairro($this->Verifica('txtBairro'));
		$objCliente->setCep($this->Verifica('txtCep'));
		$objCliente->setCidade($this->Verifica('txtCidade'));
		$objCliente->setEstado($this->Verifica('txtEstado'));
		$objCliente->setFoneResidencial($this->Verifica('txtFoneResidencial'));
		$objCliente->setFoneCelular($this->Verifica('txtFoneCelular'));
		$objCliente->setFoneReferencia($this->Verifica('txtFoneReferencia'));
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objCliente);
		
	}

	/*função para gravar funcionario, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objCliente);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoCliente->Gravar($objCliente);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Cadastro de cliente", "Cliente salvo com sucesso!", "cliente", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Cadastro de cliente", "Erro ao salvar o cliente, por favor, tente novamente!", "cliente", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoCliente->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objCliente, $retorno);
		}else{
			$objSendForm->mostraMsg("INFO", "Lista de clientes", "Erro ao localizar a lista de cliente, por favor, tente novamente!");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objCliente);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoCliente->Detalhe($objCliente);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objCliente, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Detalhe do cliente", "Erro ao localizar a detalhe do cliente, por favor, tente novamente!");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objCliente);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoCliente->Alterar($objCliente);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Alterar cliente", "Cliente alterado com sucesso!", "cliente", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Alterar cliente", "Erro ao alterar o cliente, por favor, tente novamente!", "cliente", "principal");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objCliente);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoCliente->Excluir($objCliente);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Excluir cliente", "Cliente excluido com sucesso!", "cliente", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Excluir cliente", "Erro ao excluido o cliente, por favor, tente novamente!", "cliente", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Pesquisa() {	
	
		/*Cria os objetos*/
        $objCliente = new Cliente();
		$objDaoCliente = new DaoCliente();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objCliente);

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoCliente->Pesquisa($objCliente);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraTela($objCliente, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de cliente", "Erro ao localizar os clientes, por favor, tente novamente!");
		}
		
    }
	
}
?>