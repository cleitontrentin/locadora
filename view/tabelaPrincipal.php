            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tabela de Preço</h1>
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
                            <i class="fa fa-table fa-fw"></i> Lista de tabela de preço
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="ListaTabela" name="ListaTabela">
                        
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
                            <i class="fa fa-edit fa-fw"></i> Adicionar tabela de preço
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form role="form" id="formAtual" name="formAtual">
                            <div class="row">
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Descrição</label>
                                            <input class="form-control" placeholder="Informe a descrição" type="text" id="txtDescricao" name="txtDescricao">
                                        </div>
								</div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Tipo</label>
                                            <input class="form-control" placeholder="Informe o tipo" type="text" id="txtTipo" name="txtTipo">
                                        </div>
								</div>
                                <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Valor</label>
                                            <input class="form-control" placeholder="Informe o valor" type="text" id="txtValor" name="txtValor">
                                        </div>
								</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="tabela" >
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
			$("#ListaTabela").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "tabela"
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
					, txtDescricao: document.forms["formAtual"].elements["txtDescricao"].value
					, txtValor: document.forms["formAtual"].elements["txtValor"].value
					, txtTipo: document.forms["formAtual"].elements["txtTipo"].value
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	
    </script>
    