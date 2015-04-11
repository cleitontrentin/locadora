<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Locadora - Painel adminstrativo</title>

    <!-- Core CSS - Include with every page -->
    <link href="../include/css/bootstrap.min.css" rel="stylesheet">
    <link href="../include/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="../include/css/sb-admin.css" rel="stylesheet">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="conteudoForm">
                </div>
			</div>
		</div>        
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Por favor, informe seu usuário e senha</h3>
                    </div>
                    <div class="panel-body">
							<form role="form" id="formAtual" name="formAtual">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuário" name="txtLogin" id="txtLogin" type="text" autofocus="autofocus">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="txtSenha" id="txtSenha" type="password" value="">
                                </div>
                                <input class="form-control" name="txtFormulario" id="txtFormulario" type="hidden" value="funcionario">
                                <input class="form-control" name="txtAcao" id="txtAcao" type="hidden" value="login">
                                <!-- Change this to a button or input when using this as a form -->
                                <a href="#" id="btnLogin" class="btn btn-lg btn-success btn-block">Acessar</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="../include/js/jquery-1.10.2.js"></script>
    <script src="../include/js/bootstrap.min.js"></script>
    <script src="../include/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../include/js/sb-admin.js"></script>
    
	<script type="text/javascript">
		$("#btnLogin").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: document.forms["formAtual"].elements["txtFormulario"].value
					, txtAcao: document.forms["formAtual"].elements["txtAcao"].value
					//variaveis para o objeto
					, txtLogin: document.forms["formAtual"].elements["txtLogin"].value
					, txtSenha: document.forms["formAtual"].elements["txtSenha"].value
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	
    </script>
    
</body>

</html>
