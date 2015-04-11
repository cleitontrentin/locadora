            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cliente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Alteração de Cliente
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form role="form" id="formAtual" name="formAtual">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input class="form-control" placeholder="Informe seu nome completo" type="text" id="txtNome" name="txtNome" value="<?=$_array["NOME"]?>">
                                        </div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Rua</label>
                                            <input class="form-control" placeholder="Informe seu endereço" type="text" id="txtRua" name="txtRua" value="<?=$_array["RUA"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Número</label>
                                            <input class="form-control" placeholder="Informe o numero" type="text" id="txtNumero" name="txtNumero" value="<?=$_array["NUMERO"]?>">
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Complemento</label>
                                            <input class="form-control" placeholder="Informe o complemento do endereço" type="text" id="txtComplemento" name="txtComplemento" value="<?=$_array["COMPLEMENTO"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Bairro</label>
                                            <input class="form-control" placeholder="Informe o bairro" type="text" id="txtBairro" name="txtBairro" value="<?=$_array["BAIRRO"]?>">
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>CEP</label>
                                            <input class="form-control" placeholder="Informe o numero do CEP" type="text" id="txtCep" name="txtCep" value="<?=$_array["CEP"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input class="form-control" placeholder="Informe a cidade" type="text" id="txtCidade" name="txtCidade" value="<?=$_array["CIDADE"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" placeholder="Informe o estado" type="text" id="txtEstado" name="txtEstado" value="<?=$_array["ESTADO"]?>">
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Fone Residencial</label>
                                            <input class="form-control" placeholder="Informe o telefone residencial" type="text" id="txtFoneResidencial" name="txtFoneResidencial" value="<?=$_array["FONE_RESIDENCIAL"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Fone Celular</label>
                                            <input class="form-control" placeholder="Informe o telefone celular" type="text" id="txtFoneCelular" name="txtFoneCelular" value="<?=$_array["FONE_CELULAR"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Fone Recado</label>
                                            <input class="form-control" placeholder="Informe o telefone referência" type="text" id="txtFoneReferencia" name="txtFoneReferencia" value="<?=$_array["FONE_REFERENCIA"]?>">
                                        </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtIdCliente" id="txtIdCliente" value="<?=$_array["IDCLIENTE"]?>" >
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="cliente" >
									<input type="hidden" name="txtAcao" id="txtAcao" value="alterar">
									<button tabindex="5" type="button" class="btn btn-default" id="btnEnviar">Salvar</button>
                                    <button tabindex="5" type="button" class="btn btn-default" id="btnCancela">Cancelar</button>
                                </div>
                            </div>
							</form>
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
					, txtIdCliente: document.forms["formAtual"].elements["txtIdCliente"].value
					, txtNome: document.forms["formAtual"].elements["txtNome"].value
					, txtRua: document.forms["formAtual"].elements["txtRua"].value
					, txtNumero: document.forms["formAtual"].elements["txtNumero"].value
					, txtComplemento: document.forms["formAtual"].elements["txtComplemento"].value
					, txtBairro: document.forms["formAtual"].elements["txtBairro"].value
					, txtCep: document.forms["formAtual"].elements["txtCep"].value
					, txtCidade: document.forms["formAtual"].elements["txtCidade"].value
					, txtEstado: document.forms["formAtual"].elements["txtEstado"].value
					, txtFoneResidencial: document.forms["formAtual"].elements["txtFoneResidencial"].value
					, txtFoneCelular: document.forms["formAtual"].elements["txtFoneCelular"].value
					, txtFoneReferencia: document.forms["formAtual"].elements["txtFoneReferencia"].value
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	


		$("#btnCancela").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "cliente"
					, txtAcao: "principal"
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	

    </script>
