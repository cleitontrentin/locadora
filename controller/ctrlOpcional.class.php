<?php
//importanto a classe Model
include_once("../model/opcional.class.php");
//importanto a classe DAO
include_once("../model/dao/daoOpcional.class.php");

/*Definição da Classe*/
class CtrlOpcional
{

	/*Construtor*/
	function CtrlOpcional(){

	}

	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objOpcional){
	
		/*Pegando os campos do formulário e colocando no model*/
		$objOpcional->setIdOpcional($this->Verifica('txtIdOpcional'));
		$objOpcional->setDescricao($this->Verifica('txtDescricao'));
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objOpcional = new Opcional();
		$objDaoOpcional = new DaoOpcional();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objOpcional);
		
	}

	/*função para gravar funcionario, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objOpcional = new Opcional();
		$objDaoOpcional = new DaoOpcional();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcional);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoOpcional->Gravar($objOpcional);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Cadastro de opcional", "Opcional salvo com sucesso!", "opcional", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Cadastro de opcional", "Erro ao salvar o opcional, por favor, tente novamente!", "opcional", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objOpcional = new Opcional();
		$objDaoOpcional = new DaoOpcional();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoOpcional->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOpcional, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de opcional", "Erro ao localizar o opcional, por favor, tente novamente!");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objOpcional = new Opcional();
		$objDaoOpcional = new DaoOpcional();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcional);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoOpcional->Detalhe($objOpcional);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objOpcional, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Detalhe de opcional", "Erro ao localizar o opcional, por favor, tente novamente!");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objOpcional = new Opcional();
		$objDaoOpcional = new DaoOpcional();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcional);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoOpcional->Alterar($objOpcional);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Alterar opcional", "Opcional alterado com sucesso!", "opcional", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Alterar opcional", "Erro ao alterar o opcional, por favor, tente novamente!", "opcional", "principal");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objOpcional = new Opcional();
		$objDaoOpcional = new DaoOpcional();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcional);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoOpcional->Excluir($objOpcional);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Excluir opcional", "Opcional excluido com sucesso!", "opcional", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Excluir opcional", "Erro ao excluido o opcional, por favor, tente novamente!", "opcional", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Pesquisa() {	
	
		/*Cria os objetos*/
        $objOpcional = new Opcional();
		$objDaoOpcional = new DaoOpcional();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objOpcional);

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoOpcional->Pesquisa($objOpcional);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraTela($objOpcional, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de opcional", "Erro ao localizar o opcional, por favor, tente novamente!");
		}
		
    }
	
}
?>