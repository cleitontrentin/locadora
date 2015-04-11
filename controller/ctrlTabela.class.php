<?php
//importanto a classe Model
include_once("../model/tabela.class.php");
//importanto a classe DAO
include_once("../model/dao/daoTabela.class.php");

/*Definição da Classe*/
class CtrlTabela
{

	/*Construtor*/
	function CtrlTabela(){

	}

	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objTabela){
	
		/*Pegando os campos do formulário e colocando no model*/
		$objTabela->setIdTabela($this->Verifica('txtIdTabela'));
		$objTabela->setDescricao($this->Verifica('txtDescricao'));
		$objTabela->setTipo($this->Verifica('txtTipo'));
		$objTabela->setValor($this->Verifica('txtValor'));
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objTabela = new Tabela();
		$objDaoTabela = new DaoTabela();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objTabela);
		
	}

	/*função para gravar funcionario, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objTabela = new Tabela();
		$objDaoTabela = new DaoTabela();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabela);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoTabela->Gravar($objTabela);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Cadastro de tabela de preço", "Tabela de preço salva com sucesso!", "tabela", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Cadastro de tabela de preço", "Erro ao salvar a tabela de preço, por favor, tente novamente!", "tabela", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objTabela = new Tabela();
		$objDaoTabela = new DaoTabela();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoTabela->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objTabela, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de tabela de preço", "Erro ao localizar a tabela de preço, por favor, tente novamente!");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objTabela = new Tabela();
		$objDaoTabela = new DaoTabela();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabela);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoTabela->Detalhe($objTabela);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objTabela, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Detalhe da tabela de preço", "Erro ao localizar a tabela de preço, por favor, tente novamente!");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objTabela = new Tabela();
		$objDaoTabela = new DaoTabela();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabela);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoTabela->Alterar($objTabela);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Alterar tabela de preço", "Tabela de preço alterado com sucesso!", "tabela", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Alterar tabela de preço", "Erro ao alterar a tabela de preço, por favor, tente novamente!", "tabela", "principal");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objTabela = new Tabela();
		$objDaoTabela = new DaoTabela();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabela);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoTabela->Excluir($objTabela);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Excluir tabela de preço", "Tabela de preço excluida com sucesso!", "tabela", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Excluir tabela de preço", "Erro ao excluido a tabela de preço, por favor, tente novamente!", "tabela", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Pesquisa() {	
	
		/*Cria os objetos*/
        $objTabela = new Tabela();
		$objDaoTabela = new DaoTabela();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objTabela);

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoTabela->Pesquisa($objTabela);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraTela($objTabela, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de tabela de preço", "Erro ao localizar a tabela de preço, por favor, tente novamente!");
		}
		
    }
	
}
?>