<?php
class CtrlSendForm 
{

    function CtrlSendForm(){

    }
	
	public function MostraTela($model, $result=null, $Objects=null){
	
		$acao = htmlspecialchars($_REQUEST ['txtAcao']);
		$pagina = "../view/";

		/*Identificado o objeto */
		if ($model instanceof Cliente){
			$pagina = $pagina . "cliente";
		}elseif ($model instanceof Funcionario){
			$pagina = $pagina . "funcionario";
		}elseif ($model instanceof Tabela){
			$pagina = $pagina . "tabela";
		}elseif ($model instanceof Opcional){
			$pagina = $pagina . "opcional";
		}elseif ($model instanceof OpcionalVeiculo){
			$pagina = $pagina . "opcionalveiculo";
		}elseif ($model instanceof TabelaVeiculo){
			$pagina = $pagina . "tabelaveiculo";
		}elseif ($model instanceof Veiculo){
			$pagina = $pagina . "veiculo";
		}
			
		/*Identificado a ação*/
		if ($acao == "principal"){
			$pagina = $pagina . "Principal";
		}elseif ($acao == "detalhe"){
			$_array = $result;
			$pagina = $pagina . "Detalhe";
		}elseif ($acao == "listar"){
			$pagina = $pagina . "Listar";
		}elseif ($acao == "login"){
			$_array = $result;
			$pagina = "../view/middlelogon";
		}elseif ($acao == "upload"){
			$_array = $result;
			$pagina = "../view/uploadProcess";
		}			
			
		$pagina = $pagina.".php";
				
		require($pagina);
	}

	public function MostraTelaSite($model, $result=null, $Objects=null){
	
		$acao = htmlspecialchars($_REQUEST ['txtAcao']);
		$pagina = "";
		
		/*Identificado o objeto */
		if ($model instanceof Veiculo){
			/*Identificado a ação*/
			if ($acao == "siteListaVeiculo"){
				$pagina = "../view/principalListaCarro.php";
			}elseif ($acao == "siteDetalheVeiculo"){
				$_array = $result;
				$pagina = "../view/principalDetalheCarro.php";
			}			
		}

			
		require($pagina);
	}


	public function mostraAlertMsg($tipo, $titulo, $texto, $formulario, $acao)
	{
		require("../view/mensagemAlerta.php");
	}
	
	public function mostraMsg($tipo, $titulo, $texto)
	{
		require("../view/mensagem.php");
	}	
	
}
?>

