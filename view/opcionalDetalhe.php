            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Opcional</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Alteração Opcional
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form role="form" id="formAtual" name="formAtual">
                            <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Descrição</label>
                                            <input class="form-control" placeholder="Informe a descrição" type="text" id="txtDescricao" name="txtDescricao" value="<?=$_array["DESCRICAO"]?>">
                                        </div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtIdOpcional" id="txtIdOpcional" value="<?=$_array["IDOPCIONAL"]?>" >
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="opcional" >
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
					, txtIdOpcional: document.forms["formAtual"].elements["txtIdOpcional"].value
					, txtDescricao: document.forms["formAtual"].elements["txtDescricao"].value
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	


		$("#btnCancela").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "opcional"
					, txtAcao: "principal"
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	

    </script>
