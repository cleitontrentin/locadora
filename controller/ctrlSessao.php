<?php

	session_start();
	
	if(isset($_SESSION["USUARIO_LOGADO"]) and !empty($_SESSION["USUARIO_LOGADO"])){
		if($_SESSION["USUARIO_LOGADO"] == true){
			$sLogin = $_SESSION["LOGIN"];
			$sNome = $_SESSION["NOME"];
			$sIdFuncionario = $_SESSION["IDFUNCIONARIO"];
		}else{
			header('location:../view/admin.php');
		}
	}else{
		header('location:../view/logon.php');
	}
	
?>