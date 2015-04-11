            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cliente</h1>
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
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-table fa-fw"></i> Lista de cliente
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="ListaCliente" name="ListaCliente">
                        
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
            

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Adicionar de Cliente
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form role="form" id="formAtual" name="formAtual">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input class="form-control" placeholder="Informe seu nome completo" type="text" id="txtNome" name="txtNome">
                                        </div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Rua</label>
                                            <input class="form-control" placeholder="Informe seu nome completo" type="text" id="txtRua" name="txtRua">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Número</label>
                                            <input class="form-control" placeholder="Informe o numero da sua residência" type="text" id="txtNumero" name="txtNumero">
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Complemento</label>
                                            <input class="form-control" placeholder="Informe um complemento para o seu endereço" type="text" id="txtComplemento" name="txtComplemento">
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Bairro</label>
                                            <input class="form-control" placeholder="Informe seu bairro" type="text" id="txtBairro" name="txtBairro">
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>CEP</label>
                                            <input class="form-control" placeholder="Informe seu CEP" type="text" id="txtCep" name="txtCep">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cidade</label>
                                            <input class="form-control" placeholder="Confirme sua cidade" type="text" id="txtCidade" name="txtCidade">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Estado</label>
                                            <input class="form-control" placeholder="Confirme sue estado" type="text" id="txtEstado" name="txtEstado">
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Fone Residencial</label>
                                            <input class="form-control" placeholder="Informe seu telefone residencial" type="text" id="txtFoneResidencial" name="txtFoneResidencial">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Fone Celular</label>
                                            <input class="form-control" placeholder="Confirme seu telefone celular" type="text" id="txtFoneCelular" name="txtFoneCelular">
                                        </div>
                                </div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Fone Recado</label>
                                            <input class="form-control" placeholder="Confirme seu telefone referência" type="text" id="txtFoneReferencia" name="txtFoneReferencia">
                                        </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="cliente" >
									<input type="hidden" name="txtAcao" id="txtAcao" value="incluir">
									<button tabindex="5" type="button" class="btn btn-default" id="btnEnviar">Salvar</button>
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
	


	<script type="text/javascript">
		$(document).ready(function(){
			$("#ListaCliente").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "cliente"
					, txtAcao: "listar"
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	

		$("#btnEnviar").click(function(){
			$("#alertForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: document.forms["formAtual"].elements["txtFormulario"].value
					, txtAcao: document.forms["formAtual"].elements["txtAcao"].value
					//variaveis para o objeto
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
    </script>
    