<?php
	session_start();
	
	$_SESSION["LOGIN"] = $_array["LOGIN"];
	$_SESSION["NOME"] = $_array["NOME"];
	$_SESSION["IDFUNCIONARIO"] = $_array["IDFUNCIONARIO"];
	$_SESSION["USUARIO_LOGADO"] = true;

?>
	<script type="text/javascript">
		$(document).ready(function(){
			window.location = "../view/admin.php";
		});	
</script>