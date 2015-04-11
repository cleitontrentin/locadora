            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Veículo</h1>
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
                            <i class="fa fa-table fa-fw"></i> Lista de Veículos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="ListaVeiculo" name="ListaVeiculo">
                        
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
                            <i class="fa fa-edit fa-fw"></i> Cadastro de Veiculo
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form role="form" id="formAtual" name="formAtual">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Marca</label>
                                            <input class="form-control" placeholder="Informe a marca do veículo" type="text" id="txtMarca" name="txtMarca">
                                        </div>
								</div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Modelo</label>
                                            <input class="form-control" placeholder="Informe o modelo do veículo" type="text" id="txtModelo" name="txtModelo">
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Placa</label>
                                            <input class="form-control" placeholder="informe a Placa" type="text" id="txtPlaca" name="txtPlaca">
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Ano Fabricação</label>
                                            <input class="form-control" placeholder="informe o ano de fabricação" type="text" id="txtAnoFabricacao" name="txtAnoFabricacao">
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Ano Modelo</label>
                                            <input class="form-control" placeholder="informe o ano do modelo" type="text" id="txtAnoModelo" name="txtAnoModelo">
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Combustível</label>
                                            <select class="form-control" placeholder="informe o combustível"  id="txtCombustivel" name="txtCombustivel">
                                                <option value="GASOLINA">GASOLINA</option>
                                                <option value="ALCOOL">ALCOOL</option>
                                                <option value="FLEX">FLEX</option>
                                                <option value="GNV">GNV</option>
                                                <option value="DIESEL">DIESEL</option>
                                            </select>

                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <div class="input-group">
                                                 <input class="form-control" placeholder="Informe a foto do veículo" type="text" id="txtFoto" name="txtFoto">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button" id="PesquisaImagem">Pesquisa</button>
                                                </span>
                                            </div><!-- /input-group -->                                            
                                        </div>
								</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="veiculo" >
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
			<div class="row" id="ModalEscolheImagem1">
                <div class="modal fade" id="ModalEscolheImagem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Lista de Imagens</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-2">
<?php
	$vPasta = '../carros/';
	if(is_dir($vPasta)){
		$vDiretorio = dir($vPasta);
		while($vArquivo = $vDiretorio->read())
		{
			if($vArquivo != '..' && $vArquivo != '.' && $vArquivo != '_notes'){
?>
                                        <a href="#" class="ImagemVeiculo" id="<?=$vArquivo?>"><img src="<?=$vPasta?><?=$vArquivo?>" alt=""></p>
<?php
			}
		}
		$vDiretorio->close();
	}else{
		echo 'A pasta não existe.';
	}
?>        

                                    </div>                    	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>


	<script type="text/javascript">
		$(document).ready(function(){
			$("#ListaVeiculo").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "veiculo"
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
					, txtMarca: document.forms["formAtual"].elements["txtMarca"].value
					, txtModelo: document.forms["formAtual"].elements["txtModelo"].value
					, txtPlaca: document.forms["formAtual"].elements["txtPlaca"].value
					, txtAnoFabricacao: document.forms["formAtual"].elements["txtAnoFabricacao"].value
					, txtAnoModelo: document.forms["formAtual"].elements["txtAnoModelo"].value
					, txtCombustivel: document.forms["formAtual"].elements["txtCombustivel"].value
					, txtFoto: document.forms["formAtual"].elements["txtFoto"].value
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	

		$("#PesquisaImagem").click(function(){
			$('#ModalEscolheImagem').modal('show');		
		});	
		
		$(".ImagemVeiculo").click(function(){
			document.forms["formAtual"].elements["txtFoto"].value = this.id;
			$('#ModalEscolheImagem').modal('hide');		
		});	
    </script>
    