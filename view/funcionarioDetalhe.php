            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Funcionário</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Alteração de funcionário
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <form role="form" id="formAtual" name="formAtual">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input tabindex="1" class="form-control" placeholder="Informe seu nome completo" type="text" id="txtNome" value="<?=$_array["NOME"]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input tabindex="3" class="form-control" placeholder="Informe uma senha" type="password" id="txtSenha" name="txtSenha" value="<?=$_array["SENHA"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Login</label>
                                            <input tabindex="2" class="form-control" placeholder="Informe um nome de acesso" type="text" id="txtLogin" name="txtLogin" value="<?=$_array["LOGIN"]?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirme sua Senha</label>
                                            <input tabindex="4" class="form-control" placeholder="Confirme sua senha" type="password" id="ConfirmaSenha" name="ConfirmaSenha" value="<?=$_array["SENHA"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtCodigo" id="txtIdFuncionario" value="<?=$_array["IDFUNCIONARIO"]?>" >
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="funcionario" >
									<input type="hidden" name="txtAcao" id="txtAcao" value="alterar">
									<button tabindex="5" type="button" class="btn btn-default" id="btnEnviar">Salvar</button>
									<button tabindex="6" type="button" class="btn btn-default" id="btnCancela">Cancela</button>
                                </div>
								</form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
	
            <div class="row">
                <div class="col-lg-12">
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

	<script type="text/javascript">
		$("#btnEnviar").click(function(){
			$("#alertForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: document.forms["formAtual"].elements["txtFormulario"].value
					, txtAcao: document.forms["formAtual"].elements["txtAcao"].value
					//variaveis para o objeto
					, txtIdFuncionario: document.forms["formAtual"].elements["txtIdFuncionario"].value
					, txtNome: document.forms["formAtual"].elements["txtNome"].value
					, txtLogin: document.forms["formAtual"].elements["txtLogin"].value
					, txtSenha: document.forms["formAtual"].elements["txtSenha"].value
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	

		$("#btnCancela").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "funcionario"
					, txtAcao: "principal"
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	
    </script>
    