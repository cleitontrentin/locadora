<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Locadora - upload</title>

    <!-- Core CSS - Include with every page -->
    <link href="../include/css/bootstrap.min.css" rel="stylesheet">
    <link href="../include/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Page-Level Plugin CSS - Tables -->
    <link href="../include/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">    
    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="../include/css/plugins/timeline/timeline.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="../include/css/sb-admin.css" rel="stylesheet">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

    <div class="container">

        <div id="conteudoFormUpload">

<?php
		$mensagemRetorno = "";

		// Pasta onde o arquivo vai ser salvo
		$_UP['pasta'] = '../carros/';

		// Tamanho máximo do arquivo (em Bytes)
		$_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb

		// Array com as extensões permitidas
		$_UP['extensoes'] = array('jpg', 'png', 'gif');

		// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
		$_UP['renomeia'] = true;

		// Array com os tipos de erros de upload do PHP
		$_UP['erros'][0] = 'Não houve erro';
		$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
		$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
		$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
		$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
 
		// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
		if ($_FILES['arquivo']['error'] != 0) {
			$mensagemRetorno = ("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
		}else{
			// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
			// Faz a verificação da extensão do arquivo
			$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
			if (array_search($extensao, $_UP['extensoes']) === false) {
				$mensagemRetorno = ("Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif");
			}
			// Faz a verificação do tamanho do arquivo
			elseif ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
				$mensagemRetorno = ("O arquivo enviado é muito grande, envie arquivos de até 2Mb.");
			}
			// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
			else {
				// Primeiro verifica se deve trocar o nome do arquivo
				if ($_UP['renomeia'] == true) {
					// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
					$nome_final = time().'.jpg';
				} else {
					// Mantém o nome original do arquivo
					$nome_final = $_FILES['arquivo']['name'];
				}
	
				// Depois verifica se é possível mover o arquivo para a pasta escolhida
				if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
					// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
					$mensagemRetorno = ("Upload efetuado com sucesso!");
				} else {
					// Não foi possível fazer o upload, provavelmente a pasta está incorreta
					$mensagemRetorno = ("Não foi possível enviar o arquivo, tente novamente");
				}
			}
 		}
?>

        
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="../include/js/jquery-1.10.2.js"></script>
    <script src="../include/js/bootstrap.min.js"></script>
    <script src="../include/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="../include/js/plugins/morris/raphael-2.1.0.min.js"></script>
	
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="../include/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../include/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    
    <!-- SB Admin Scripts - Include with every page -->
    <script src="../include/js/sb-admin.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			alert('<?=$mensagemRetorno?>');
			window.location = "../view/upload.php";
		});	
	</script>
</body>

</html>
