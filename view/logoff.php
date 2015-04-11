<?php
	session_start();
	unset($_SESSION['USUARIO_LOGADO']);
	unset($_SESSION['LOGIN']);
	unset($_SESSION['NOME']);
	unset($_SESSION['IDFUNCIONARIO']);
	header('location:index.php');
?>