<?php
//importanto a classe Model
include_once("../model/funcionario.class.php");
//importanto a classe DAO
include_once("../model/dao/daoFuncionario.class.php");

/*Definição da Classe*/
class CtrlFuncionario
{

	/*Construtor*/
	function CtrlFuncionario(){

	}
	
	private function Verifica($pVariavel){	

		if((isset($_REQUEST[$pVariavel]))&&(!empty($_REQUEST[$pVariavel]))){		
			return htmlspecialchars($_REQUEST[$pVariavel]);		
		}else{		
			return "";
		}		

	}

	private function RequestForm($objFuncionario){
	
		/*Pegando os campos do formulário e colocando no model*/
		$objFuncionario->setIdFuncionario($this->Verifica('txtIdFuncionario'));
		$objFuncionario->setNome($this->Verifica('txtNome'));
		$objFuncionario->setLogin($this->Verifica('txtLogin'));
		$objFuncionario->setSenha($this->Verifica('txtSenha'));
		
	}

	/*função para abrir a tela principal e carregar as informações necessárias*/
	public function Principal(){
		/*Cria os objetos*/
		$objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();
	
		$objSendForm = new CtrlSendForm();
		$objSendForm->MostraTela($objFuncionario);
		
	}

	/*função para gravar funcionario, obtem os dados do formulário*/
	public function Gravar()
	{
		/*Cria os objetos*/
		$objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objFuncionario);

		/*Enviando os dados para o banco de dados*/
		$retorno = $objDaoFuncionario->Gravar($objFuncionario);
		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Cadastro de funcionário", "Funcionário salvo com sucesso!", "funcionario", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Cadastro de funcionário", "Erro ao salvar o funcionário, por favor, tente novamente!", "funcionario", "principal");
		}

    }
	
	/*Função para listar os dados, obtem os dados do banco de dados e envia para a tela*/
	public function Listar() 
	{
		/*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Solicitando dados para o banco de dados*/
		$retorno = $objDaoFuncionario->Listar();

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objFuncionario, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Lista de funcionário", "Erro ao localizar o funcionário, por favor, tente novamente!");
		}

    }

	public function Detalhe() 
	{
        /*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objFuncionario);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Detalhe($objFuncionario);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objFuncionario, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Detalhe de funcionário", "Erro ao localizar o funcionário, por favor, tente novamente!");
		}

    }
	
	public function Alterar() 
	{
        /*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objFuncionario);

		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Alterar($objFuncionario);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Alterar funcionário", "Funcionário alterado com sucesso!", "funcionario", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Alterar funcionário", "Erro ao alterar o funcionário, por favor, tente novamente!", "funcionario", "principal");
		}

    }
	
	public function Excluir() 
	{
        /*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objFuncionario);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Excluir($objFuncionario);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();

		if ($retorno > 0){
			$objSendForm->mostraAlertMsg("OK", "Excluir funcionário", "Funcionário excluido com sucesso!", "funcionario", "principal");
		}else{
			$objSendForm->mostraAlertMsg("ERRO", "Excluir funcionário", "Erro ao excluido o funcionário, por favor, tente novamente!", "funcionario", "principal");
		}

    }
	
	public function Login() 
	{
        /*Cria os objetos*/
        $objFuncionario = new Funcionario();
		$objDaoFuncionario = new DaoFuncionario();

		/*Pegando os campos do formulário e colocando no model*/
		$this->RequestForm($objFuncionario);
		
		/*Enviando para o banco de dados*/
		$retorno = $objDaoFuncionario->Login($objFuncionario);

		/*Criando objeto para mostrar o resultado*/
		$objSendForm = new CtrlSendForm();
		
		/*Verificado o resultado do processamento*/
		if ($retorno > 0){
			$objSendForm->MostraTela($objFuncionario, $retorno);
		}else{
			$objSendForm->mostraMsg("ERRO", "Login", "Usuário ou Senha inválidos, por favor, tente novamente!");
		}

    }
	
}
?>