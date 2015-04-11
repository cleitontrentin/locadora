            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Veículo</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Alteração de Veiculo
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form role="form" id="formAtual" name="formAtual">
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Marca</label>
                                            <input class="form-control" placeholder="Informe a marca do veículo" type="text" id="txtMarca" name="txtMarca" value="<?=$_array["MARCA"]?>">
                                        </div>
								</div>
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Modelo</label>
                                            <input class="form-control" placeholder="Informe o modelo do veículo" type="text" id="txtModelo" name="txtModelo" value="<?=$_array["MODELO"]?>">
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Placa</label>
                                            <input class="form-control" placeholder="informe a Placa" type="text" id="txtPlaca" name="txtPlaca" value="<?=$_array["PLACA"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Ano Fabricação</label>
                                            <input class="form-control" placeholder="informe o ano de fabricação" type="text" id="txtAnoFabricacao" name="txtAnoFabricacao" value="<?=$_array["ANO_FABRICACAO"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Ano Modelo</label>
                                            <input class="form-control" placeholder="informe o ano do modelo" type="text" id="txtAnoModelo" name="txtAnoModelo" value="<?=$_array["ANO_MODELO"]?>">
                                        </div>
                                </div>
                                <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Combustível</label>
                                            <select class="form-control" placeholder="informe o combustível"  id="txtCombustivel" name="txtCombustivel">
                                                <option value="GASOLINA" <?php  if($_array["COMBUSTIVEL"] == "GASOLINA") { echo 'selected="selected"'; } ?> >GASOLINA</option>
                                                <option value="ALCOOL" <?php  if($_array["COMBUSTIVEL"] == "ALCOOL") { echo 'selected="selected"'; } ?> >ALCOOL</option>
                                                <option value="FLEX" <?php  if($_array["COMBUSTIVEL"] == "FLEX") { echo 'selected="selected"'; } ?> >FLEX</option>
                                                <option value="GNV" <?php  if($_array["COMBUSTIVEL"] == "GNV") { echo 'selected="selected"'; } ?> >GNV</option>
                                                <option value="DIESEL" <?php  if($_array["COMBUSTIVEL"] == "DIESEL") { echo 'selected="selected"'; }?> >DIESEL</option>
                                            </select>

                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <div class="input-group">
                                                 <input class="form-control" placeholder="Informe a foto do veículo" type="text" id="txtFoto" name="txtFoto" value="<?=$_array["FOTO"]?>">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button" id="PesquisaImagem">Pesquisa</button>
                                                </span>
                                            </div><!-- /input-group -->                                            
                                        </div>
								</div>
                            </div>
                            

                            <div class="row">
                                <div class="col-lg-12" align="right">
									<input type="hidden" name="txtIdVeiculo" id="txtIdVeiculo" value="<?=$_array["IDVEICULO"]?>" >
									<input type="hidden" name="txtFormulario" id="txtFormulario" value="veiculo" >
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Opcionais do Veiculo
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row" id="listaOpcionais">

<?php
			while ($_arrayItem = mysql_fetch_assoc($Objects[0]))
			{
?>	

                                <div class="col-lg-2">
                                    <div class="checkbox">
                                        <label>
                                            <input class="ckbOpcional" type="checkbox" value="<?=$_arrayItem["IDOPCIONAL"]?>" <?php if($_arrayItem["POSSUI"]=="SIM"){ echo 'checked="checked"'; }?>  ><?=$_arrayItem["DESCRICAO"]?>
                                        </label>
                                    </div>                   
                                </div>
<?php
			}
?>
                                

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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-edit fa-fw"></i> Tabela de preço do Veiculo
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row" id="listaTabelas">

<?php
			while ($_arrayItem = mysql_fetch_assoc($Objects[1]))
			{
?>	

                                <div class="col-lg-6">
                                    <div class="checkbox">
                                        <label>
                                            <input class="ckbTabela" type="checkbox" value="<?=$_arrayItem["IDTABELA"]?>" <?php if($_arrayItem["POSSUI"]=="SIM"){ echo 'checked="checked"'; }?>  ><?=$_arrayItem["DESCRICAO"]?>(R$ <?=$_arrayItem["VALOR"]?>)
                                        </label>
                                    </div>                   
                                </div>
<?php
			}
?>
                                

                            </div>
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


	<div id="gravaopcional" style="visibility:hidden">
    </div>



	<script type="text/javascript">
		$(".ckbOpcional").click(function(){

			var vAcao;
			if (this.checked){
				vAcao = 'incluir';
			}else{
				vAcao = 'excluir';
			}
		
			$("#alertForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: 'opcionalveiculo'
					, txtAcao: vAcao
					//variaveis para o objeto
					, txtIdVeiculo: document.forms["formAtual"].elements["txtIdVeiculo"].value				
					, txtIdOpcional: this.value				
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});

		});	
	
		$(".ckbTabela").click(function(){

			var vAcao;
			if (this.checked){
				vAcao = 'incluir';
			}else{
				vAcao = 'excluir';
			}
		
			$("#alertForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: 'tabelaveiculo'
					, txtAcao: vAcao
					//variaveis para o objeto
					, txtIdVeiculo: document.forms["formAtual"].elements["txtIdVeiculo"].value				
					, txtIdTabela: this.value				
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});

		});	
	
		$("#btnEnviar").click(function(){
			$("#alertForm").load("/locadora/controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: document.forms["formAtual"].elements["txtFormulario"].value
					, txtAcao: document.forms["formAtual"].elements["txtAcao"].value
					//variaveis para o objeto
					, txtIdVeiculo: document.forms["formAtual"].elements["txtIdVeiculo"].value
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


		$("#btnCancela").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "veiculo"
					, txtAcao: "principal"
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
    